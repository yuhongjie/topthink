<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<!-- not no -->
	<meta name='renderer' content='webkit'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<meta name='description' content=''>
	<meta name='keywords' content=''>
	<title>@yield('title')--ThinkPHP 入门教程</title>
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" integrity='' crossorign='anonymous'>
	<link rel="stylesheet" href="/static/css/app.css">
</head>
<body>
	<header>
		<div>
			<nav>
				<div class="container">
					<a href="">
						Thinkphp 入门教程
					</a>
					<button>
						<span>按钮</span>
					</button>
					<div>
						<ul>
							<li>
								<a href="">主页
									<span>(current)</span>
								</a>
							</li>
							<li>
								<a href="">帮助</a>
							</li>
							<li><a href="">关于</a></li>
						</ul>
						<a href="">注册</a>

					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
		@yield('content')
	</div>
	<script src="/static/jquery/jquery.slim.min.js"></script>
	<script src="/static/jquery/popper.min.js"></script>
	<script src="/static/js/app.js"></script>
</body>
</html>