			<footer>
				<a href="http://stakebox.com">StakeBox WebUI v1.1.0</a>
			</footer>
		</div><!--.container-->
</pre></body></html>
<script>
var myVar=setInterval(function(){price()},1000);

function price() {
    
	<?php // fetch price in BTC price of current coin
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://www.cryptonator.com/api/full/".$pair);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$rawDatab = curl_exec($curl);
	curl_close($curl);
	$datab = json_decode($rawDatab);
	$priceb = $datab->ticker->markets[0]->price;
	?>
	document.title = <?php print($priceb); ?>;
}
</script>