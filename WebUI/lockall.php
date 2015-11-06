<?php
include ("header.php");
include ("pass.php");
$currentWallet = LiteDoge;
$_SESSION['currentWallet'] = $currentWallet;
$coin->walletlock();
$currentWallet = HYPER;
$coin->walletlock();
include ("footer.php");
?>