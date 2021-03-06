<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"F:\phpStudy\PHPTutorial\WWW\shequTp\public/../application/index\view\index\register.html";i:1564557100;}*/ ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册 - 千寻 - Thousands Find</title>
	<meta author="zrong.me 曾荣">
	<link rel="stylesheet" type="text/css" href="/shequTp/public/static/index/css/login_register.css">
</head>
<style>

</style>
<body>
<div id="box"></div>
<div class="cent-box register-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">摄趣</h1>
		<h2 class="sub-title">生活热爱分享 - the fun of photo</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="login.html">登录</a>
				<a href="register.html" class="active">注册</a>
				<div class="slide-bar slide-bar1"></div>				
			</div>
		</div>

		<div class="login form">
			<div class="group">
				<div class="group-ipt email">
					<input type="email" name="email" id="email" class="ipt" placeholder="邮箱地址" required>
				</div>
				<div class="group-ipt user">
					<input type="text" name="user" id="username" class="ipt" placeholder="选择一个用户名" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="设置登录密码" required>
				</div>
				<div class="group-ipt password1">
					<input type="password" name="password1" id="password1" class="ipt" placeholder="重复密码" required>
				</div>
				<div class="group-ipt password1" >
					<select name="question" id="question"  class="ipt" style="width:299px;height:45px;">
						<option value="0">请选择一个密保问题</option>
						<option value="你父亲的名字？">你父亲的名字？</option>
						<option value="你母亲的名字？">你母亲的名字？</option>
						<option value="你高中的学校是哪所？">你高中的学校是哪所？</option>
						<option value="你初中学校是哪所？">你初中学校是哪所？</option>
						<option value="你记忆最深刻的一个人？">你记忆最深刻的一个人？</option>
					</select>
				</div>
				<div class="group-ipt password1">
					<input type="text" name="answer" id="answer" class="ipt" placeholder="请输入问题答案" required>
				</div>
				<div class="group-ipt verify">
					<input type="text" name="verify" id="in1" class="ipt" placeholder="输入验证码" required>
					<span id="verify" ></span>
				</div>
				<label id="l1"></label>
			</div>
		</div>

		<div class="button" style="margin-bottom:100px;">
			<button type="submit" class="login-btn register-btn" id="button">注册</button>
		</div>
	</div>
</div>
<div class="footer">
	<p>拾光纪 - Thousands Find</p>
	<p>Designed By shiguang &  <a href="shequ.me">shiguang.me</a> 2019</p>
</div>
<script src='/shequTp/public/static/index/js/particles.js' type="text/javascript"></script>
<script src='/shequTp/public/static/index/js/background.js' type="text/javascript"></script>
<script src='/shequTp/public/static/index/js/jquery.min.js' type="text/javascript"></script>
<script src='/shequTp/public/static/index/js/layer/layer.js' type="text/javascript"></script>
<script src='/shequTp/public/static/index/js/myjs.js' type="text/javascript"></script>
<script>
	$(document).ready(function() {
			 //我写的验证码
			//验证码
			var code;
			function createCode(){
	        	code = '';//首先默认code为空字符串
		        var codeLength = 4;//设置长度，这里看需求，我这里设置了4
		        var codeV = $("#verify");
		        //设置随机字符
		        var random = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R', 'S','T','U','V','W','X','Y','Z');
		        for(var i = 0; i < codeLength; i++){ //循环codeLength 我设置的4就是循环4次   
		             var index = Math.floor(Math.random()*36); //设置随机数范围,这设置为0 ~ 36  
		             code += random[index];  //字符串拼接 将每次随机的字符 进行拼接
	        }
		        codeV.text(code);//将拼接好的字符串赋值给展示的Value
	    	}
		
    		//页面开始加载验证码
			createCode();
			//验证码Div加载点击事件
			$("#verify").bind('click',function() {
					createCode();
				});
				//下面就是判断是否==的代码，无需解释
				$("#button").bind('click',function() {
		    	 var oValue = $("#in1").val().toUpperCase();
		    	 $("#l1").html("");
		        if(oValue ==""){
		        	$("#l1").html("<font color='red'>请输入验证码</font>");
		        }else if(oValue != code){
		        	$("#l1").html("<font color='red'>验证码不正确，请重新输入</font>");
		            oValue = "";
		            createCode();
		        }else{
					var email = $(" #email ").val();
					var username = $(" #username ").val();
					var password = $(" #password ").val();
					var password1 = $(" #password1 ").val();
					var question = $(" #question ").val();
					var answer = $(" #answer ").val();
					var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if(email == ''){
						$("#l1").html("<font color='red'>请输入邮箱</font>");
					}else if(!emailfilter.test(email)){
						$("#l1").html("<font color='red'>邮箱格式不符</font>");
					}else if(username == ''){
						$("#l1").html("<font color='red'>请输入用户名</font>");
					}else if(password == ''){
						$("#l1").html("<font color='red'>请输入密码</font>");
					}
					else if(password.length < 6){
						$("#l1").html("<font color='red'>密码长度不能小于6位</font>");
					}else if(password1 == ''){
						$("#l1").html("<font color='red'>请输入确认密码</font>");
					}else if(question == '请选择一个密保问题'){
						$("#l1").html("<font color='red'>请选择密保问题</font>");
					}else if(answer == ''){
						$("#l1").html("<font color='red'>请输入密保问题</font>");
					}else if(password !== password1){
						$("#l1").html("<font color='red'>您输入的两次密码不一致</font>");
					}else{
						$.ajax({
						type: "POST",
						dataType: "json",
						url: httpurl + "user/ajaxRegisterUser",  
						data: {
							'email':email,
							'username':username,
							'password':password,
							'question':question,
							'answer':answer
						},
						success: function(res){
							if(res.code == 200){
								window.location.href="login.html";
							}
						},
						error:function(err){
							console.log(err)
						}
					});  
					}
		        }
		    });	
		});
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	})
</script>
</body>
</html>