<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>人员列表</title>
		<style>
			table,th,tr,td{
				border: 1px solid #abcdef;
				border-collapse: collapse;
			}
			th,tr,td{
				margin: 20px;
				padding: 10px;
			}
			table{
				margin: auto auto;
			}
			
		</style>
	</head>
	<body>
		<a href="<?php echo u('add');?>">新增人员</a>
		<table>
			<tr><th>ID</th><th>姓名</th><th>年龄</th><th>性别</th><th>操作</th></tr>
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person_info): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($person_info["id"]); ?></td>
				<td><?php echo ($person_info["name"]); ?></td>
				<td><?php echo ($person_info["age"]); ?></td>
				<td><?php echo ($person_info["sex"]); ?></td>
				<td><a href="<?php echo u('edit',array('id'=>$person_info['id']));?>">修改</a>		<a href="<?php echo u('del',array('id'=>$person_info['id']));?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table>
	</body>
</html>