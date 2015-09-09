<?php
include ("header.php");
include ("pass.php");
$walletDir = "/home/stakebox/wallets/".$currentWallet
?>

<div style="padding: 5px 30px 0px;">
    <div class="row">
        <div class="col-lg-2">
            <form action="rescan" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="stop">Stop The Wallet</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
            <form action="rescan" method="POST"><input type="hidden">
                <div class="input-group">
     	            <button class='btn btn-default' type="submit" name="status" value="rescan">Start The Wallet With -rescan Option</button>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
<?php  
$status = $_POST["status"];  
  
if ($status == "stop"){
 
    $coin->stop(); 
    print '<h2>You have updated the UI</h2>';
 
}  
if ($status == "rescan"){ 
   
    exec($currentWallet ."-rescan"); 
    print '<h2>You have updated the current wallet. Reboot now in order to use the new version.</h2>';

} 
?>
</div>
</div>
<?php include ("footer.php"); ?>