			<footer>
				<a href="http://stakebox.com">StakeBox WebUI v1.1.0</a>
			</footer>
		</div><!--.container-->
</pre></body></html>
<script>
     setInterval(function () {
        $.get("price.php", function() {
                document.title = <?php print($priceb); ?>;
        });
    }, 3000);
</script>