<?php 
include ("header.php");
include ("pass.php");
$txid = $_POST['txid'];
$commentLocation = "/home/stakebox/UI/".$currentWallet.$txid."comment.php";

function addComment(){

	global $commantLocation;
	global $newComment;
	if(!file_exists("$commentLocation")){
		$file = fopen("$commentLocation","w");
		fwrite($file,"");
		fclose($file);
	}   
	if (is_readable($commentLocation) == FALSE) 
		die ("The comment file must be writable."); 

	// Open the file and erase the contents if any
	$fp = fopen($commentLocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$comment='$newComment';\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo '<h4><a><p><b>You have added a comment.</p></b></a></h4>' ;
}

if($_POST['comment'] != ""){
   $newComment = $_POST['comment'];
   addComment();
   print_r('You have added the comment ');
   print_r($_POST['comment']);
}
	
?>
<div class="panel panel-default">
  <center><p>Add comment to transaction <?php echo $_POST['txid']; ?>
    <table class="table-hover table-condensed table-bordered table">
        <form action="comment" method="POST"><input type="hidden">
            <input type="hidden" name="a">
                <tr>
                    <td><center<b>Comment to add:</b></center></td>
                    <td><input class="form-control" type="text" name="address" value="<?php print($address); ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class='btn btn-default' type="submit" value="Preview"><b>Preview</b></button></td>
		</tr>
        </form>
    </table>
</div>
</div>
<?php include ("footer.php"); ?>