<?php if (!defined('THINK_PATH')) exit();?>	<form <?php if((ACTION_NAME) == "add"): ?>action="<?php echo U('save');?>"<?php else: ?>action="<?php echo U('update');?>"<?php endif; ?> method="post">
	<lable>用户名：</lable><input type="text" name="name" value="<?php echo ($user["name"]); ?>" /><br>
	<lable>密码：</lable><input type="password" name="password" value="<?php echo ($user["password"]); ?>" /><br>
	<button type="submit">保存</button>
</button>