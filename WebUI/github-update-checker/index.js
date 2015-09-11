var https = require( 'https' ),
    path  = require( 'path' ),
    fs    = require( 'fs' ),

    GITHUB_HOST    = 'api.github.com',
    GITHUB_API     = 'https://' + GITHUB_HOST + '/repos/',

    packageJSON    = null, // getPackageJSON
    callback       = null, // uptodate
    currentVersion = null, // getCurrentVersion
    latestVersion  = null; // parseLatestVersion


exports.uptodate = function( options ) {

    if ( typeof options === 'function' ) {
        callback = options;
    } else {
        if ( !options || !options.callback || typeof options.callback !== 'function' ) {
            console.error( 'ERROR: github-update-checker package requires callback' );
            return;
        }

        callback = options.callback;
    }


    // getPackageJSON -> getCurrentVersion -> getLatestVersion -> parseLatestVersion -> compareVersions
    getPackageJSON( options );

}


function getPackageJSON( options ) {
    var packagePath = options.packagePath || path.resolve( 'package.json' );

    fs.readFile( packagePath, 'utf-8', function( err, data ) {
        if ( err ) {
            console.error( 'ERROR: github-update-checker package cannot read package.json' );
            callback( 'error' );
            return;
        }

        try {
            packageJSON = JSON.parse( data );
        } catch( e ) {
            console.error( 'ERROR: github-update-checker package cannot parse package.json' );
            callback( 'error' );
            return;
        }

        getCurrentVersion( options );
    })
}


function getCurrentVersion( options ) {
    if ( !packageJSON.version ) {
        console.error( 'ERROR: github-update-checker package cannot find `version` in package.json' );
        callback( 'error' );
        return;
    }

    currentVersion = packageJSON.version.replace( /[^0-9]+/g, '' ) / 1; // to num

    getLatestVersion( options );
}


function getLatestVersion( options ) {
    var url      = getURL( options ),
        timeout  = options.timeout  || 3000;


    if ( !url ) {
        console.error( 'ERROR: github-update-checker requires URL passed as options or set in project package.json' );
        callback( 'error' );
        return;
    }

    var request = https.get( url, function( res ) {
        var data = [];

        res.on( 'data', function( chunk ) {
            data.push( chunk );
        });

        res.on( 'end', function() {
            parseLatestVersion( options, data.join('') );
        })

    }).on('error', function( e ) {
        console.log( 'WARN: github-update-checker package says "' + e.message + '"' );
        callback( 'error' );
        return;
    });

    request.setTimeout( timeout, function() {
        console.log( 'WARN: github-update-checker package couldn\'t get "' + url + '"' );
        request.abort();
        callback( 'error' );
        return;
    });
}


function getURL( options ) {
    var url   = options.url || getURLfromPackage(),
        parts = url.split( '/' );

    return {
        host: GITHUB_HOST,
        path: '/' + parts.slice( 3, parts.length ).join( '/' )
    };
}


function getURLfromPackage() {
    if ( !packageJSON || !packageJSON.repository || !packageJSON.repository.url ) {
        return;
    }

    var username = packageJSON.repository.url.split( '/' ), // ["https:", "", "github.com", "USERNAME", "REPO_NAME.git"]
        username = username.slice( 3, username.length ),    // ["USERNAME", "REPO_NAME.git"]
        repoName = username.pop(),                          // "REPO_NAME.git"
        repoName = repoName.split( '.' )[ 0 ];              // REPO_NAME

    return GITHUB_API + username + '/' + repoName + '/tags';
}


function parseLatestVersion( options, data ) {
    var json = {};

    try {
        json = JSON.parse( data );
    } catch( e ) {
        console.error( 'ERROR: github-update-checker package cannot parse GitHub response' );
        callback( 'error' );
        return;
    }


    if ( !json[ json.length-1 ] || !json[ json.length-1 ].name ) {
        console.log( 'WARN: github-update-checker package cannot find latest tag' );
        callback( 'error' );
        return;
    }


    // the latest tag is at the end of the array
    latestVersion = json[ json.length-1 ].name.replace( /[^0-9]+/g, '' ) / 1; // to num


    compareVersions( options );
}


function compareVersions( options ) {
    if ( typeof currentVersion !== 'number' || typeof latestVersion !== 'number' ) {
        console.log( 'WARN: github-update-checker package needs numbers to compare' );
        callback( 'error' );
        return;
    }


    ( latestVersion > currentVersion ) ? callback( false ) : callback( true );
}