<form action="contentUpdate_Handler.php?page=page1_Content.txt&return=page1_Edit.php" method="post">
  <textarea type="text" name="txt" width="100%" style="height:200px; width:100%;"><?php echo file_get_contents( "pageContents/page1_Content.txt" ); ?></textarea><br>
  <input type="submit" value="Save">
</form>
