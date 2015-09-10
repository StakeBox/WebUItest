			<footer>
				<a href="http://stakebox.com">StakeBox WebUI v1.1.0</a>
			</footer>
		</div><!--.container-->
</pre></body></html>
<script>
	var pair = <?php echo json_encode($pair); ?>;

	var data_from_ajax;

	$.get('price.php?pair=net-btc', function(data) {
		data_from_ajax = data;
		document.getElementById("output").innerHTML = data_from_ajax;
	});


</script>
