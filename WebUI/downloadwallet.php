<?php
include ("header.php");
include ("pass.php");
$destination = "/var/www/html/webui/WebUI/".$currentWallet."wallet.dat";
// create a new cURL resource
$ch = curl_init();
?>

<?php 
try {
	$coin->backupwallet($destination);
	echo "<p class='bg-success'><b>You have successfully backed your wallet up to $destination.</b></p> ";
} catch(Exception $e) {
	echo "<p class='bg-danger'><b>Error: Something went wrong...  Did you enter a location that does not exist, or is unreachable?</b></p>";
}
exec("sudo -u stakebox chmod g+r /var/www/html/webui/WebUI/".$currentWallet."wallet.dat");
curl_setopt($ch, CURLOPT_URL, "http://stakebox.local/HYPERwallet.dat");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
?>
</div>
<?php include ("footer.php");?>