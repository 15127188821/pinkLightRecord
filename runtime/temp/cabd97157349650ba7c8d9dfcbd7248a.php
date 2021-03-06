<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"F:\phpStudy\PHPTutorial\WWW\shequTp\public/../application/admin\view\login\log.html";i:1564824893;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>拾光纪后台管理系统</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="/shequTp/public/static/log/css/style.css">
  <link rel="stylesheet" type="text/css" href="/shequTp/public/static/log/css/reset.css"/>
</head>
<body>
<style>
	#verify{
		width:140px;
	}
</style>
<div id="particles-js">
		<div class="login">

			<div class="login-top">
				登录
			</div>
			<form action="<?php echo url('login/log'); ?>" class="form" method="post">
				<div class="login-center clearfix">
					<div class="login-center-img"><img src="/shequTp/public/static/log/img/name.png"/></div>
					<div class="login-center-input">
						<input type="text" name="username"  placeholder="请输入您的用户名" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的用户名'"/>
						<div class="login-center-input-text">用户名</div>
					</div>
				</div>
				<div class="login-center clearfix">
					<div class="login-center-img"><img src="/shequTp/public/static/log/img/password.png"/></div>
					<div class="login-center-input">
						<input type="password" name="password"  placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'"/>
						<div class="login-center-input-text">密码</div>
					</div>
				</div>
				<div class="login-center clearfix">
					<div class="login-center-img" style="margin-top: 12px;"><img src="/shequTp/public/static/log/img/password.png"/></div>
					<div class="login-center-input">
						<input type="text" name="code" id='verify' placeholder="请输入验证码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入验证码'" style="width: 100px;margin-top: 12px;"/>
						<img class="pull-right" src="<?php echo url('login/verify'); ?>" onclick="this.src=this.src+'?'">
						<div class="login-center-input-text">验证码</div>
					</div>
				</div>

				<div class="login-center clearfix">
					<input type="submit" value="登录" class="login-button">
				</div>
			</form>
		</div>
		<div class="sk-rotating-plane"></div>
</div>

<!-- scripts -->
<script src="/shequTp/public/static/log/js/particles.min.js"></script>
<script src="/shequTp/public/static/log/js/app.js"></script>
<script type="text/javascript">

</script>
</body>
</html>