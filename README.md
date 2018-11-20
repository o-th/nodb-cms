# No Database Content Management System

## What is this?
Basic CMS that doesnt require a database, uses php and text files to write and read information. This doesnt have a built in login system, for a no database login system check out [nodb-login](https://github.com/isteinbrook/nodb-login).

## Basic Implementation
*The following is a breakdown of the code in [example](https://github.com/isteinbrook/nodb-cms/tree/master/example)*
### Editor
```
<form action="contentUpdate_Handler.php?page=page1_Content.txt&return=page1_Edit.php" method="post">
  <textarea type="text" name="txt" width="100%" style="height:200px; width:100%;"><?php echo file_get_contents( "pageContents/page1_Content.txt" ); ?></textarea><br>
  <input type="submit" value="Save">
</form>
```
**Breakdown**

Example:<br>
```<form action="contentUpdate_Handler.php?page=page1_Content.txt&return=page1_Edit.php" method="post">```

What to change:Page name and page edit name.<br>
action="contentUpdate_Handler.php?page=**`page1`**&return=**`page1_Edit.php`**"

Example:<br>
```<textarea type="text" name="txt" width="100%" style="height:200px; width:100%;"><?php echo file_get_contents("pageContents/page1_Content.txt"); ?></textarea><br>```

What to change:File location.<br>
echo file_get_contents("**`pageContents/page1_Content.txt`**");

### Handler
```php
<?php
$myfile = fopen("pageContents/".$_GET["page"], "w") or die("Unable to open file!");
fwrite($myfile, $_POST["txt"]);
fclose($myfile);
?>

<script type="text/javascript"> window.location = "<?php echo $_GET["return"] ?>"</script>
```

**Breakdown**
What to change: this will need no change unless you want to change the naming format, in that case then simple change the following highlighted in bold.
$myfile = fopen("pageContents/".$_GET["page"], "w") or die("Unable to open file!");

### Display
```php
<?php echo file_get_contents( "pageContents/page1_Content.txt" ); ?>
```

**Breakdown**
Example:<br>
```echo file_get_contents( "pageContents/page1_Content.txt" );```

What to change: File location.<br>
echo file_get_contents( "pageContents/**page1_Content.txt**" );
