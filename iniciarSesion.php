<!DOCTYPE html>
<html>
	<head>
		<title>HxG Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Página web de ejercicio en casa">
		<link rel="stylesheet" type="text/css" href="css/estiloIniciarSesion.css">
		<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
		<script src="https://unpkg.com/scrollreveal"></script>
	</head>
	
	<body>
	<?php
	/*
	if(!empty($_SESSION['laSesion'])){
	session_start();
	echo $_SESSION['laSesion'];
	}
	*/
	?>
		<?php
	
	include "header/header.php";
	include_once "singleton/singleton.php";
	?>
	
	<?php
	
	if(isset($_POST['enviarDatos'])){
		$nombre = $_POST['elNombre'];
		$pass = $_POST['laPass'];
		$conBD=Singleton::singleton();
		$iniciarSesion=$conBD->iniciarSesion($nombre, $pass);
		if($iniciarSesion){
			session_start();
			$_SESSION['nombre'] = $nombre;
			header('Location: seleccionarEntrenamiento.php');
		}
		else{
			echo "El usuario no existe";
		}	
	}
	
	?>
	
		<div class="primerContenedor">
			<h2 class="h2-grande">INICIAR SESIÓN</h2>
			<h2 class="h2-arriba">Y comenzar a entrenar</h2>
		</div>
		
		<div class="formularioIniciarSesion">
			
			<form id="mandarFormulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<h2>Iniciar sesión</h2>
					<label>Nombre de usuario</label>
					<span class="campo"><input type="text" name="elNombre"></span>
					<br>
					<br>
					<label>Contraseña</label>
					<span class="campo"><input type="password" name="laPass"></span>
					<br>
					<br>
					<span class="elBoton"><input type="submit" name="enviarDatos" value="Iniciar sesión"></span>
					</form>
		
		
		</div>
	</body>
</html>