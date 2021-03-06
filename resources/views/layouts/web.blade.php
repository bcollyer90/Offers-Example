<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">

	<title>Flex harder</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/web.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
		<a class="navbar-brand" href="#">Flex</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Just <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Building</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">A Test</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Maybe</a>
						<a class="dropdown-item" href="#">It'll</a>
						<a class="dropdown-item" href="#">Work?</a>
					</div>
				</li>
			</ul>
			<span class="navbar-text">
				<a href="/login">Admin Login</a>
			</span>
		</div>
	</nav>

	<main role="main" class="container">

		<div class="web">

			@yield('content')
			
		</div>

	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
