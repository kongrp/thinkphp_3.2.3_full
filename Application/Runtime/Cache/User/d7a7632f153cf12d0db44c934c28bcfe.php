<?php if (!defined('THINK_PATH')) exit();?><table>
	<a href="<?php echo U('add');?>">添加用户</a>
	<tr>
		<th>序号</th>
		<th>ID</th>
		<th>name</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($users)): foreach($users as $k=>$user): ?><tr>
			<td><?php echo ($k+1); ?></td>
			<td><?php echo ($user[id]); ?></td>
			<td><?php echo ($user[name]); ?></td>
			<td><a class="button" href="<?php echo U('detail?id='.$user['id']);?>">查看</a></td>
			<td><a class="button" href="<?php echo U('edit?id='.$user['id']);?>">编辑</a></td>
			<td><a class="button" href="<?php echo U('delete?id='.$user['id']);?>">删除</a></td>
		</tr><?php endforeach; endif; ?>
</table>