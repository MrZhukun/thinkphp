<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>新增</title>
	</head>

	<body>
		<form action="<?php echo u('add');?>" method="post">
			名字：
			<input type="text" name="name" value="" />
			<br /> 类别：
			<input type="text" name="category" value="" />
			<br /> 数量：
			<input type="text" name="num" value="" />
			<br />
			<input type="submit" value="提交" />
		</form>
	</body>

</html>