<?php
	$pair = ($_GET['pair']; 
	// fetch price in BTC price of current coin
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://www.cryptonator.com/api/full/".$pair);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$rawDatab = curl_exec($curl);
	curl_close($curl);
	$datab = json_decode($rawDatab);
	$priceb = $datab->ticker->markets[0]->price;
	echo $price;
?>
