<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>登录</title>
		<base href="<?=base_url() ?>"/>
		<script type="text/javascript" src="<?=base_url() ?>js/jquery-1.4.1.min.js"></script>
	</head>
	<body>
		<div class="login">
			<form name="login" method="post" action="<?=base_url() ?>login/check" id="loginform">
				<h3>通行证</h3>
				<div class="name item">
					<span class="label">帐 号</span>
					<input class="input" type="text" name="username"/>
				</div>
				<div class="psd item">
					<span class="label">密 码</span>
					<input class="input" type="password" name="password"/>
				</div>
				<div class="item">
					<input class="submit" type="submit" value="登录"/>
				</div>
				<div class="item">
					<p class="reg">
						还没有账号？<a href="<?=base_url() ?>register">马上注册</a>
						<br />
					</p>

				</div>

			</form>

		</div>

	</body>
</html>
