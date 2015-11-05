<?php
include ("header.php");
include ("pass.php");
$destination = "/var/www/html/webui/WebUI/".$currentWallet."wallet.dat";
?>

<?php 
try {
	$coin->backupwallet($destination);
	echo "<p class='bg-success'><b>You have successfully backed your wallet up to $destination.</b></p> ";
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
exec("chmod g+r /var/www/html/webui/WebUI/".$currentWallet."wallet.dat");
?>
</div>
<?php include ("footer.php");?>