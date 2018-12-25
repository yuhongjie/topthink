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
							Thinkphp about winer's 入门教程
						</a>
						<button>
						<span>按钮</span>
						</button>
						<div>
							<ul>
								<li>
									<a href="{{url('index/index/home')}}">主页
										<span>(current)</span>
									</a>
								</li>
								<li>
									<a href="{{url('index/index/help')}}">帮助</a>
								</li>
								<li><a href="{{url('index/index/about')}}">关于</a></li>
							</ul>
							<a href="{{url('user/auth/create')}}">注册</a>
						</div>
					</div>
				</nav>
			</div>
		</header>