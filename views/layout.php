<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?> | Equizzy</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Custom CSS -->
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
				<a href="<?= $_ENV['HOST'] ?>/">Inicio</a>
				<a href="<?= $_ENV['HOST'] ?>/register">Regístrate</a>
				<a href="<?= $_ENV['HOST'] ?>/login">Iniciar sesión</a>
			</nav>
		</div>
	</section>

	<?php echo $content; ?>

	<footer class="footer">
		<p>&#169;Todos los derechos reservados por equizzyApp 2022</p>
	</footer>

	<!-- Font Awesome -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="build/js/app.js"></script>
	<?php echo $script ?? ''; ?>
</body>

</html>