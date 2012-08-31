<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>登录</title>
		<link href="<?=base_url() ?>css/bootstrap.min.css" rel="stylesheet">
		<script src="<?=base_url() ?>js/bootstrap.min.js"></script>
		<base href="<?=base_url() ?>"/>
	</head>
	<body>
		<div class="login">
			<form name="login" method="post" action="<?=base_url() ?>login/check" id="loginform" class="form-horizontal">
				<h2>用户登录</h2>
				<hr />
				<div class="control-group">
					<label class="control-label">帐 号</label>
					<div class="controls">
						<input class="input" type="text" name="username"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">密 码</label>
					<div class="controls">
						<input class="input" type="password" name="password"/>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">

						<button type="submit" class="btn">
							登 录
						</button>
					</div>
					<div class="controls">
						<br />还没有账号？<a href="<?=base_url() ?>register">马上注册</a>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
