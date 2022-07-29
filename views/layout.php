<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?> | Equizzy</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="build/css/app.css">
</head>

<body>

	<section class="header">
		<div class="hero">
			<div class="hero-content">
				<h1 class="logo">equizzy<span>App</span></h1>
				<p>Aplicación de encuestas en la que podrás responder las mejores encuestas según tus gustos.</p>
			</div>
		</div>
	</section>

	<section class="navbar-container">
		<div class="navbar container">
			<div class="logo">
				<a class="logo">equizzy<span>App</span></a>
			</div>
			<nav class="nav">
				<a href="#">link</a>
				<a href="#">link</a>
				<a href="#">link</a>
				<a href="#">link</a>
				<a href="#">link</a>
			</nav>
		</div>
	</section>

	<?php echo $content; ?>

	<script src="build/js/app.js"></script>
	<?php echo $script ?? ''; ?>
</body>

</html>