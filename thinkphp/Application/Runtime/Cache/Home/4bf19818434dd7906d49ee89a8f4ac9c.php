<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>动物园列表</title>
		<style>
			table,tr,th,td{
				border: 2px solid #abcdef;
				border-collapse: collapse;
			}
			td,tr,th{
				margin: 20px;
				padding: 20px;
			}
			table{
				margin: auto auto;
			}
		</style>
	</head>
	<body>
		<table>
			<form action="<?php echo u(index);?>" method="post">
			名字：<input type="text" name="abc" value="">
			<input type="submit" name="提交" value="提交">
			</form>
			<tr><th>ID</th><th>名字</th><th>类别</th><th>数量</th><th>操作</th></tr>
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Zoo_info): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($Zoo_info["id"]); ?></td>
					<td><?php echo ($Zoo_info["name"]); ?></td>
					<td><?php echo ($Zoo_info["category"]); ?></td>
					<td><?php echo ($Zoo_info["num"]); ?></td>
					<td><a href="<?php echo u('edit',array('id'=>$Zoo_info['id']));?>">更改</a>   <a href="<?php echo u('del',array('id'=>$Zoo_info['id']));?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<a href="<?php echo u(add);?>">添加</a>
			<p></p>
			<a href="<?php echo u(index);?>">列表</a>
		</table>
	</body>
</html>