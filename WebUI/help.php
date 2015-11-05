<?php
include ("header.php");
include ("pass.php");
?>
	
   <b><a name="server">Server</a></b>
      <div style="padding: 5px 30px 5px;">
         <div class="row">
            <a href="getinfo" class='btn btn-default' role='button'>Get Server Info</a>
<?php if($currentWallet == PayCoin || $currentWallet == Sprouts):?>
            <a href="listminting" class='btn btn-default' role='button'>Get Staking Info</a>
<?php elseif($currentWallet == BottleCaps || $currentWallet == CASH || $currentWallet == Diamond || $currentWallet == HoboNickels || $currentWallet == HYPER || $currentWallet == HyperStake || $currentWallet == NovaCoin || $currentWallet == PhilosopherStone || $currentWallet == TekCoin):?>
            <a href="getmininginfo" class='btn btn-default' role='button'>Get Staking Info</a>
<?php else:?>
            <a href="getstakinginfo" class='btn btn-default' role='button'>Get Staking Info</a>
<?php endif;?>
            <a href="getpeerinfo" class='btn btn-default' role='button'>Get Peer Info</a>
            <a href="getconnectioncount" class='btn btn-default' role='button'>Get Connection Count</a>
            <a href="power" class='btn btn-default' role='button'>Power</a>
            <a href="update" class='btn btn-default' role='button'>Update</a>
            <a href="getblockcount" class='btn btn-default' role='button'>Get Block #</a>
            <a href="allcommands" class='btn btn-default' role='button'>All Commands</a>
            <a href="setpass" class='btn btn-default' role='button'>Change UI Password</a>
            <a href="changecurrency" class='btn btn-default' role='button'>Change Currency</a>
         </div><!-- /.row -->
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="accounts&addresses">Accounts & Addresses</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <form action="getbalance" method="POST"><input type="hidden">
                  <div class="input-group">
     	             <button class='btn btn-default' type="submit" value="getbalance">Get Total Balance</button>
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-5">
               <form action="setprimary" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="setprimary">Set Main Address</button>
                     </span>
                        <input class="form-control" type="text" name="address" placeholder="Address" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-5">
               <form action="getaddressesbyaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getaddressesbyaccount">Get Addresses By Account</button>
	             </span>
	                <input class="form-control" type="text" name="account" placeholder="Leave blank for default account" >
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="getnewaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="getnewaddress">Get New Address</button>
                     </span>
                        <input class="form-control" type="text" name="account" placeholder="Enter account you want to get a new address for.">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="getaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getaccount">Get Account</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address you would like to know the account for.">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="setaccount" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="setaccount">Set Account</button>
                     </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                        <input class="form-control" type="text" name="account" placeholder="Account">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="getreceivedbyaddress" method="POST"><input type="hidden" name="a" value="getreceivedbyaddress">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="getreceivedbyaddress">Get Received By Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="validateaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="validateaddress">Validate Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->			
</div><!-- /.well -->

<div class="well">
   <b><a name="transactions">Transactions</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <a href="last20transactions" class='btn btn-default' role='button'>Last 20 Transactions</a><br>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-2">
               <a href="listtransactions" class='btn btn-default' role='button'>All Transactions</a><br>
            </div><!-- /.col-lg-2 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
      <div style="padding: 10px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="listreceivedbyaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="listreceivedbyaddress">List Received According To Address</button>      
                     </span>
                        <input class="form-control" type="text" name="minconf" placeholder="Minimum Confirmations">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="gettransaction" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="gettransaction">Get Transaction Info</button>
               	    </span>
                        <input class="form-control" type="text" name="txid" placeholder="Transaction id">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->            
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="listtransactionsbyaccount" method="POST"><input type="hidden">
                     <div class="input-group">
                        <span class="input-group-btn">
	                   <button class='btn btn-default' type="submit" value="listtransactions">List Transactions</button>
                        </span>
	                   <input class="form-control" type="text" name="account" placeholder='Account:Use * for all leave blank for default account.'>
	             </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                  <input class="form-control" type="number" name="count" placeholder="Number of transactions to show" size="3">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="sending">Sending</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="sendtoaddress" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="sendtoaddress">Send To Address</button>
	             </span>
	                <input class="form-control" type="text" name="address" placeholder="Address">
	          </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="amount" placeholder="Amount">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
               <input class="form-control" type="text" name="comment" placeholder="Comment">
               </form>
            </div><!-- /.col-lg-12 -->
         </div><!-- /.row -->
      </div><!-- /.style -->
      <div style="padding: 10px 15px 5px;">
         <div class="row">
            <div class="col-lg-6">
               <form action="sendfrom" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default'type="submit" value="sendfrom">Send From Account</button>
                     </span>
                        <input class="form-control" type="text" name="account" placeholder="From Account">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="address" placeholder="To Address">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->                
         <div class="row">
            <div class="col-lg-6">
               <input class="form-control" type="text" name="amount" placeholder="amount">
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <input class="form-control" type="text" name="comment" placeholder="Comment">
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         </form>
      </div><!-- /.padding -->
</div><!-- /.well -->

<div class="well">
   <b><a name="security">Security</a></b>
      <div style="padding: 5px 15px 5px;">
         <div class="row">
            <div class="col-lg-2">
               <form action="walletlock" method="POST"><input type="hidden">
                  <button class='btn btn-default btn-block' type="submit" value="walletlock">Lock Your Wallet</button>
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-2"> 
               <form action="downloadwallet" method="POST"><input type="hidden">
	          <button class='btn btn-default btn-block' type="submit" value="backupwallet">Backup Wallet</button>	       
               </form>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-8">
               <form action="encryptwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="encryptwallet">Encrypt Wallet</button>
	             </span>
                        <input class="form-control" type="password" name="password" placeholder="Enter password you would like to use">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-8 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="walletpassphrasechange" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="walletpassphrasechange">Change Wallet Password</button>
	             </span>
	                <input class="form-control" type="password" name="old" placeholder="Old Password">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                        <input class="form-control" type="password" name="new" placeholder="New Password">
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <form action="unlockstaking" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="unlockstaking">Unlock Wallet For Staking Only</button>
                     </span>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                  </div><!-- /input-group -->            
               </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <form action="unlockwallet" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <button class='btn btn-default' type="submit" value="unlockwallet">Unlock Wallet To Send</button>	
                     </span>
	                <input class="form-control" type="password" name="password" placeholder="password">
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-6 -->
         </div><!-- /.row -->
         <div class="row">
            <div class="col-lg-5">  
               <form action="dumpprivkey" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="dumpprivkey">Dump Private Key</button>	      
                     </span>
                        <input class="form-control" type="text" name="address" placeholder="Address">
		     </span>
                  </div><!-- /input-group -->
               </form>
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-5"> 
               <form action="importprivkey" method="POST"><input type="hidden">
                  <div class="input-group">
                     <span class="input-group-btn">
	                <button class='btn btn-default' type="submit" value="importwallet">Import Private Key</button>	       
	             </span>
                        <input class="form-control" type="text" name="key" placeholder="Private Key">
                  </div><!-- /input-group -->
            </div><!-- /.col-lg-5 -->
            <div class="col-xs-2">
                        <input class="form-control" type="text" name="label" placeholder="Label">
               </form>
            </div><!-- /.col-lg-2 -->
      </div><!-- /.padding -->
</div><!-- /.well -->
<p><h4>
   This page is here to describe all of the functions of the WebUI, and give 
   some pointers on best practices.
</p>
<p>
   Control Page Features:
</p>
<p>
<div class="well">

   <b><a name="accounts&addresses">Server Section:</a></b>
      <div style="padding: 5px 15px 5px;">
<div class="row">
   Server Section:
</p>
<p>
   Get Server Info: Shows you some of the most important 
   information regarding the wallet for the coin you are currently working with.
   Including the wallet version you are running, your balance, the networks current 
   block height, coins in circulation, etc. 
</p>
   Get Staking Info: Shows different information depending on the coin. If the
   current coin you are looking at doesn't have the getstakinginfo RPC call you 
   will be shown the information from either the getmininginfo or the list minting 
   RPC call. because of this, the information shown may be of varying degrees 
   of relevance to the actual staking of coins.
</p>
<p>
   Get Peer Info: Displays IP addresses, connection times, wallet versions, and ban
   scores of connected peers.
</p>
<p>
   Get Connection Count: Simply shows how many peers your wallet is currently
   connected to.
</p>
<p>
   Power: Clicking this button will take you to a page where you can choose to
   shut down, or restart you StakeBox.
</p>
<p>
   Update: Use this to upgrade to the latest version of WebUI or the current wallet
</p>
<p>
   Get Block #: Displays the most recent block that your wallet knows about. 
   This can be handy to know if your wallet is fully synced, if you know the 
   current block the network is on. It can also be used to verify that you are on
   the correct chain in the event of a fork in the network.
</p>
<p>
   All Commands: This will take you to a page that shows all of the available RPC
   commands available for th current wallet. You can also use the page to pass 
   any of the available commands. Most of the more commonly used command are 
   simplified on the control page, but this gives you complete control of you wallet.
</p>
<p>
   Change UI Password: Use this to change the password used to access the WebUI.
   You should probably change the default password of "stakebox" right away.
</p>
<p>
   Change Currency: This button will take you to a page where you can choose from 
   a long list of currencies to display the value of your wallet in on the main page.
</p>
</div></div></div>
<div class="well">
<p>
   Accounts & Addresses Section:
</p>
<p>
   Get Total Balance: This will show the balance of all addresses in your wallet.
</p>
<p>
   Set Main Address: Your main address is shown on the main page in text and as 
   a QR code, if you would like to display a different address you can enter it here.
</p>
<p>
   Get Addresses By Account: This will show all addresses associated with the account
   that you enter in the text field. Leaving the field blank will show all of the 
   addresses for the default account.
</p>
<p>
   Get New Address: Use this function to create new addresses, if you leave 
   the text field blank the new address will be associated with the default 
   account. If you enter a nonexistent account in the field it will be created 
   and the new address associated with it.
</p>
<p>
   Get Account: Shows the account associated with the address entered in the text
   field.
</p>
<p>
   Set Account: This function has two text fields. 
   Use it to associate an address with and account. The account will be created 
   if it doesn't exist, leaving the account field blank will associate the 
   address with the default account.
</p>
<p>
   Get Received By Address: Put one of your addresses in the text field to see
   how much has been received by that spacific address.
</p>
<p>
   Validate Address: Enter any address to confirm if it is a valid address for the
   current coin. This does not mean that it is your address, or even that somone
   is using it, simply that it is valid.
</p>
</div>
<div class="well">
<p>
   Transactions Section:
</p>
<p>
   Last 20 Transactions: Pretty self explanatory, shows the wallets 20 most recent
   transactions.
</p>
<p>
   All Transactions: You guessed it, see all of you Transactions.
</p>
<p>
   List Received According To Address: Shows the amount received by all addresses 
   in your wallet, slit up by address. You can enter a number in the text field
   and only see transactions with that many, or more confimations.
</p>
<p>
   Get Transaction Info: Enter a transaction ID in the text field to see detailed
   information about that specific transaction.
</p>
<p>
   List Transactions: Enter an account and the number of transactions you wish to 
   see in the two text fields and you will see only transactions associated 
   with that account.
</p>
</div>
<div class ="well">
<p>
   Sending Section:
</p>
<p>
   Send To Address: Sends the amount of coins selected to the address selected, 
   with the option to include a comment. 
</p>
<p>
   Send From Account: Sends coins from a specific account in your wallet.
</p>
</div>
<div class="well">
<p>
   Security Section:
</p>
<p>
   Lock Your Wallet: If your wallet is encrypted clicking this button will 
   lock it, if it is unlocked. If your wallet is unlocked for staking you will 
   need to use this to lock it before you can unlock it for sending. If it is 
   unlocked for sending you will also need to lock it before you can unlock it 
   for staking. Your wallet will stake while it is unlocked for sending, but it 
   safer to not leave it like that indefinitely.
</p>
<p>
   Backup Wallet: Clicking this will automatically save your wallet.dat to your 
   local hard drive. The name of the current wallet will be appended to the file
   name, for example, if the current wallet you are working with is Hyper the 
   file would be saved as HYPERwallet.dat.
</p>
<p>
   Encrypt Wallet: This will encrypt your wallet with the password entered in the 
   text field, do not forget your password, you will need it to access your coins,
   if you lose it you will lose your coins!
</p>
<p>
   Change Wallet Password: Use this to change the password you used when encrypting
   your wallet. 
</p>
<p>
   Unlock Wallet For Staking Only: Entering the password you encrypted your wallet
   with in the text field and clicking the button will unlock your wallet for 
   staking for 115 days. 
</p>
<p>
   Unlock Wallet To Send: This will completely unlock your wallet for 115 days, 
   allowing you to send coins from your wallet.
</p>
<p>
   Dump Private Key: Displays the private key for the address entere in the text
   field. You may have several addresses in your wallet with coins in them, you 
   should use this function for all addresses with coins and save the private 
   keys somewhere safe. This is ultimate way to be sure to never lose your coins.
</p>
<p>
   Import Private Key: You can use this to import private keys from other wallets
   that you have saved, the label, if included will be the account associated 
   with it.
</p></h4>
</div>
</div>
</div>
<?php
include ("footer.php");
?>