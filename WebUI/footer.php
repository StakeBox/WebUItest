			<footer>
				<a href="http://stakebox.com">StakeBox WebUI v1.1.0</a>
			</footer>
		</div><!--.container-->
</pre></body></html>
<script>
	var pair = <?php echo json_encode($pair); ?>;

	var data_from_ajax;
	setInterval function() {
	$.get('price.php?pair='+pair, function(data) {
		data_from_ajax = data;
		document.title = data_from_ajax;
	}, 10000);
</script>
