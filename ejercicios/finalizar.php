<!DOCTYPE html>
	<html>
		<head>

			<meta charset="UTF-8">
			<title>HxG</title>
			<link rel="stylesheet" type="text/css" href="css/estiloFinalizar.css">
			<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
		</head>
		<body>
	
	<header>
			<div class="logo">
				<img src="imagenes/logo.png">
			</div>
			<nav>
				<a href="../home.php" class="nav-link">Inicio</a>
				<a href="../iniciarSesion.php" class="nav-link">Iniciar sesión</a>
				<a href="../registro.php" class="nav-link">Registrate</a>
			</nav>
	</header>
	
<?php

session_start();
		
?>


	<div class="primerContenedor">
				<h2 class="h2-grande"><?php echo $_SESSION['nombre'];?></h2>
				<h2 class="h2-arriba">Has realizado un trabajo increíble</h2>
				
	</div>

	</body>
</html>