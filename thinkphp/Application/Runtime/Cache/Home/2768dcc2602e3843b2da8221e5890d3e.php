<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>修改</title>
	</head>

	<body>
		<form action="<?php echo u('edit');?>" method="post">
			姓名：
			<input type="text" name="name" value="<?php echo ($person_data["name"]); ?>" />
			<br /> 年龄：
			<input type="text" name="age" value="<?php echo ($person_data["age"]); ?>" />
			<br /> 性别：
			<input type="radio" name="sex" value="男"      <?php if(($person_data["sex"]) == "男"): ?>checked="true"<?php endif; ?>       />男
			<input type="radio" name="sex" value="女" 	   <?php if(($person_data["sex"]) == "女"): ?>checked="true"<?php endif; ?>    	   />女
			<br />
			<input type="hidden" name="id" value="<?php echo ($person_data["id"]); ?>" />
			<input type="submit" value="提交" />
		</form>
	</body>

</html>