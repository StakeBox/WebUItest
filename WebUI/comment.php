<?php 
include ("header.php");
include ("pass.php");


	
?>
<div class="panel panel-default">
  <center><p>Add comment to transaction <?php echo
    <table class="table-hover table-condensed table-bordered table">
        <form action="comment" method="POST"><input type="hidden">
            <input type="hidden" name="a">
                <tr>
                    <td><b>To Address</b></td>
                    <td><input class="form-control" type="text" name="address" value="<?php print($address); ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class='btn btn-default' type="submit" value="Preview"><b>Preview</b></button></td>
        </form>
    </table>
</div>
</div>
<?php include ("footer.php"); ?>