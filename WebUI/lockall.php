<?php
include ("header.php");
include ("pass.php");
$currentWallet = LiteDoge;
$_SESSION['currentWallet'] = $currentWallet;
$coinu = $wallets[$currentWallet];
$coin = new jsonRPCClient("{$coinu['protocol']}://{$coinu['user']}:{$coinu['pass']}@{$coinu['host']}:{$coinu['port']}", true);
$coin->walletlock();
$currentWallet = HYPER;
$coin->walletlock();
include ("footer.php");
?>