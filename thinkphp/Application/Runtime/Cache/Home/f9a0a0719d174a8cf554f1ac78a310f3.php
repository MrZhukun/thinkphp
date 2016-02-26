<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo u('ceshi_add');?>" method="post">
	<input type="text" name="username" value=""/>
	<br/>
	<input type="password" name="pwd" value=""/>
	<input type="submit" value="提交">
</form>

</body>
</html>