<?php
$myfile = fopen("pageContents/".$_GET["page"]."_Content.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST["txt"]);
fclose($myfile);
?>

<script type="text/javascript"> window.location = "<?php echo $_GET["return"] ?>"</script>