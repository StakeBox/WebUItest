<?php
include ("header.php");
include ("printarray.php");
include ("pass.php");
?>


</div>
<div class="well"> 
<p><b>This is the complete information for the transaction with txid <?php print_r($_POST['txid']);?>.</b></p>
<?php printarray($coin->gettransaction($_POST['txid'])); ?>
</div>
<?php include ("footer.php");?>