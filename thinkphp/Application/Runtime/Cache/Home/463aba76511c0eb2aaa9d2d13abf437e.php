<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>新增</title>
	</head>

	<body>
		<form action="<?php echo u('add');?>" method="post">
			姓名：
			<input type="text" name="name" value="" />
			<br /> 年龄：
			<input type="text" name="age" value="" />
			<br /> 性别：
			<input type="radio" name="sex" value="男" />男
			<input type="radio" name="sex" value="女" />女
			<br />
			<input type="submit" value="提交" />
		</form>
	</body>

</html>