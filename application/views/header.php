<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>首页</title>
		<link href="<?=base_url() ?>css/bootstrap.css" rel="stylesheet">
		<link href="<?=base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">

		<script src="<?=base_url() ?>js/bootstrap.min.js"></script>
		<script src="<?=base_url() ?>js/bootstrap-collapse.js"></script>
		<base href="<?=base_url() ?>"/>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="#">Merak</a>
					<div class="nav-collapse">
						<ul class="nav">
							<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span4" placeholder="Search">
							</form>
							<li class="divider-vertical"></li>

						</ul>
						<ul class="nav pull-right">
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li class="divider-vertical"></li>
							<li>
								<a href="#">登录</a>
							</li>
							<li class="divider-vertical"></li>
							<li>
								<a href="#">注册</a>
							</li>

						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div>
