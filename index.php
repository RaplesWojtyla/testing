<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Lobster &display=swap');

		h1 {
			font-family: 'Lobster', cursive;
		}
	</style>
</head>

<body>
	<section>
		<div class="container mb-5 align-items-center">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
								Tutorial
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">C</a>
								<a class="dropdown-item" href="#">C++</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Python</a>
							</div>
						</li>
					</ul>
					<div class="row">
						<div class="col">
							<a href="./register.html" class="btn btn-outline-primary mx-2">Daftar</a>
							<a href="./login.html" class="btn btn-outline-success">Masuk</a>
						</div>
					</div>
				</div>
			</nav>
			<div class="row">
				<div class="col align-self-center">
					<h1>Hai!</br>Selamat Datang</h1>
					<p class="mt-3 mb-4">
						Website ini berisi tutorial-tutorial yang berkaitan pemrograman web.
					</p>
					<a href="#" class="btn btn-primary">Ayo Belajar</a>
				</div>
				<div class="col d-none d-md-block d-lg-block d-xl-block"><img src="./img/img.jpg" alt="" width="600"></div>
			</div>
		</div>
	</section>

	<script src="./js/jquery-3.7.1.min.js"></script>
	<script src="./js/bootstrap.js"></script>
</body>

</html>