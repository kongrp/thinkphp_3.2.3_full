<?php if (!defined('THINK_PATH')) exit();?><table>
	<a href="<?php echo U('add');?>">添加用户</a>
	<tr>
		<th>序号</th>
		<th>ID</th>
		<th>name</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($users)): foreach($users as $k=>$users): ?><tr>
			<td><?php echo ($k+1); ?></td>
			<td><?php echo ($users[id]); ?></td>
			<td><?php echo ($users[name]); ?></td>
			<td><a class="button" href=":U('detail?id='.$user['id'])}">查看</td>
			<td><a class="button" href=":U('detail?id='.$user['id'])}">编辑</td>
			<td><a class="button" href=":U('detail?id='.$user['id'])}">删除</td>
		</tr><?php endforeach; endif; ?>
</table>