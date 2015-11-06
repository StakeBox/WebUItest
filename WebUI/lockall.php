<?php
include ("header.php");
include ("pass.php");
$currentWallet = LiteDoge;

$coin->walletlock();
$currentWallet = HYPER;
$coin->walletlock();
include ("footer.php");
?>