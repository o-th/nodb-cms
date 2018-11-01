# No Database Content Management System

## What is this?
Basic cms that doesnt require a database, uses php and text files to display information. This doesnt have a built in login system, for a no database login system check out nodb-login.

## Basic Implementation
*All files included in html*
### Editor 

```
<form action="contentUpdate_Handler.php?page=page1&return=page1_Edit.php" method="post">
  <textarea type="text" name="txt" width="100%" style="height:200px; width:100%;"><?php echo file_get_contents("pageContents/page1_Content.txt" ); ?></textarea><br>
  <input type="submit" value="Save">
</form>
```

### Handler
```
<?php
$myfile = fopen("pageContents/".$_GET["page"]."_Content.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST["txt"]);
fclose($myfile);
?>

<script type="text/javascript"> window.location = "<?php echo $_GET["return"] ?>"</script>
```

### Display
```
<?php echo file_get_contents( "pageContents/page1_Content.txt" ); ?>
```
