<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('Login/Index/login');?>" method="post">
	<input type="text" name="name" />
	<input type="password" name="password" />
	<button type="submit">Login</button>
</form>