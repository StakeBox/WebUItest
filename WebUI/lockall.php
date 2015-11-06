<?php
include ("header.php");
include ("pass.php");
foreach ($wallets as $walletName => $walletData)
	echo '<li><a href="#">'.$walletName.'</a></li>';
$coin->walletlock();
$currentWallet = HYPER;
$coin->walletlock();
include ("footer.php");
?>