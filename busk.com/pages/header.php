
<?php require 'config.php'; ?>
<!DOCTYPE html>
  <html>
    <head>
	<title>Classificados</title>
	    <!-- Required meta tags -->
			<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	
</head>

<body>
<div class="navbar-fixed">
	<nav  >
		<div  class="nav-wrapper black" >
		<a href="./" class="brand-logo center" ><h4>BUSK </h4></a>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

			<ul class="right hide-on-med-and-down" >
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="meus-anuncios.php" ><h4>Meus Anúncios</h4></a></li>
					<li><a href="sair.php" ><h4>Sair</h4></a></li>
				<?php else: ?>
					<li><a href="cadastre-se.php" ><h4>Cadastre-se</h4></a></li>
					<li><a href="login.php" ><h4>Login</h4></a></li>
				<?php endif; ?>
			</ul>


		</div>
	</nav>

	</div>

		<ul class="sidenav" id="mobile-demo" >
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="meus-anuncios.php" ><h4>Meus Anúncios</h4></a></li>
					<li><a href="sair.php" ><h4>Sair</h4></a></li>
				<?php else: ?>
					<li><a href="cadastre-se.php" ><h4>Cadastre-se</h4></a></li>
					<li><a href="login.php" ><h4>Login</h4></a></li>
				<?php endif; ?>
			</ul>
	
	<header class="bg-gradient" id="home">

