<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sitio para realizar, crear y contestas encuestas de tus temas preferidos">
	<meta name="keywords" content="Encuestas, equizzyApp, crear encuestas, realizar encuestas">
	<meta name="author" content="Esteban Redón">
	<meta name="copyright" content="Esteban Redón">
	<meta name="robots" content="noindex">
	<meta name="robots" content="nofollow">
  <title><?= $title; ?> | Equizzy</title>
  <!-- App Icon -->
	<link rel="shortcut icon" href="/build/img/EquizzyAppIcon.svg" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>

  <section class="sitePollsLayoutContainer">
    <section class="sidebarContainer">
      <div class="sidebar-header">
        <a href="<?= $_ENV['HOST'] ?>/admin">
          <h2 class="logo">equizzy<span>Admin</span></h2>
        </a>
        <div class="menu-button">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
      <ul class="sidebarOptions">
        <li class="option"><a href="<?= $_ENV['HOST'] ?>/">Administradores</a></li>
        <li class="option"><a href="<?= $_ENV['HOST'] ?>/">Usuarios</a></li>
        <li class="option"><a href="<?= $_ENV['HOST'] ?>/">Encuestas</a></li>
        <li class="option"><a href="<?= $_ENV['HOST'] ?>/">Tipos de preguntas</a></li>
      </ul>
    </section>
    <main class="mainContent">
      <?php include_once(__DIR__ . './../templates/navbar.php') ?>
      <?php echo $content; ?>
      <footer class="footer polls-footer">
        <p>&#169;Todos los derechos reservados por equizzyApp 2022</p>
      </footer>
    </main>
  </section>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/build/js/navbarPollsResponsive.js"></script>
  <?php echo $script ?? ''; ?>
</body>

</html>