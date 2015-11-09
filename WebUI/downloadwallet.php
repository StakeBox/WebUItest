<?php
include ("header.php");
include ("pass.php");
$destination = "/var/www/html/webui/WebUI/".$currentWallet."wallet.dat";
$coin->backupwallet($destination);
exec("sudo chmod g+r /var/www/html/webui/WebUI/".$currentWallet."wallet.dat");
header("Location: $_SERVER['HTTP_HOST'].$currentWallet."wallet.dat");
exit;
?>

