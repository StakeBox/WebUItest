#github-update-checker

Compares project's package.json version and latest GitHub tag version and returns the result.

github-update-checker automatically tries to get project's `package.json` and construct a URL to GitHub API from `repository.url` section, but can get everything as an option.


##Methods

###uptodate

`uptodate` takes callback or options as an argument.

####Callback:

```
uptodate( callback(answer) )
```

**answer**

Type: Boolean or String

`true` (up to date), `false` (needs update) or `'error'`.


####Options:
```
uptodate({
    packagePath: '/www/myproject/package.json',
    url        : 'https://api.github.com/repos/LOGIN/PROJECT/tags',
    timeout    : 10000
    callback   : callback
})
```

**packagePath**

Type: String

Absolute path to project's package.json file. github-update-checker will try to find it itself.

**url**

Type: String

Full URL to project's GitHub tags API. github-update-checker will try to construct it automatically from `repository.url` in package.json.

**timeout**

Type: Number

When give up waiting for GitHub API response. Default is 3000ms.

**callback**

Type: Function

Gets `true` (up to date), `false` (needs update) or `'error'`.


Example
-------

```
var updater = require( 'github-update-checker' );

updater.uptodate(function( uptodate ) {
    // uptodate is true, false or 'error'
});
```


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/clexit/github-update-checker/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

