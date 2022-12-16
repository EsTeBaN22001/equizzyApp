<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sitio para realizar, crear y contestas encuestas de tus temas preferidos">
	<meta name="keywords" content="Encuestas, equizzyApp, crear encuestas, realizar encuestas">
	<meta name="author" content="Esteban Redón">
	<meta name="copyright" content="Esteban Redón">
	<meta name="robots" content="index">
	<meta name="robots" content="follow">
	<title><?= $title; ?> | Equizzy</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="build/css/app.css">
</head>

<body>

	<section class="header">
		<div class="hero">
			<div class="hero-content container-sm">
				<h1 class="logo">equizzy<span>App</span></h1>
				<p class="register-paragraph">¡Inicia tu primera encuesta ahora y descubre todo lo que nuestro sitio tiene para ofrecer!</p>
				<a href="/register" class="register-link">Regístrate para comenzar</a>
			</div>
		</div>
	</section>

	<section class="navbar-container">
		<div class="navbar container">
			<div>
				<a href="<?= $_ENV['HOST'] ?>/" class="logo">equizzy<span>App</span></a>
			</div>
			<nav class="nav">
				<a href="<?= $_ENV['HOST'] ?>/register">Regístrate</a>
				<a href="<?= $_ENV['HOST'] ?>/login">Iniciar sesión</a>
			</nav>
		</div>
	</section>

	<main>
		<?php echo $content; ?>
	</main>

	<footer class="footer">
		<p>&#169;Todos los derechos reservados por equizzyApp 2022</p>
	</footer>

	<!-- Font Awesome -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="build/js/navbarHome.js"></script>
	<?php echo $script ?? ''; ?>
</body>

</html>