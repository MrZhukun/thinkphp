<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>更改</title>
	</head>

	<body>
		<form action="<?php echo u('edit');?>" method="post">
			名字：
			<input type="text" name="name" value="<?php echo ($Zoo_info["name"]); ?>" />
			<br /> 类别：
			<input type="text" name="category" value="<?php echo ($Zoo_info["category"]); ?>" />
			<br /> 数量：
			<input type="text" name="num" value="<?php echo ($Zoo_info["num"]); ?>" />
			<input type="hidden" name="id" value="<?php echo ($Zoo_info["id"]); ?>" />
			<input type="submit" value="提交" />
		</form>
	</body>

</html>