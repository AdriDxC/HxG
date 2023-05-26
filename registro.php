<!DOCTYPE html>
<html>
	<head>
		<title>HxG Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Página web de ejercicio en casa">
		<link rel="stylesheet" type="text/css" href="css/estiloRegistro.css">
		<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
		<script src="https://unpkg.com/scrollreveal"></script>
	</head>
	
	<?php
	
	include_once('singleton/singleton.php');
	
	?>
	
	<?php
	if(isset($_POST['enviarDatos'])){
		
		$conBD=Singleton::singleton();
		$errores = [];
		$seguir = true;
		$nombre = $_POST['elNombre'];
		$pass = $_POST['laPass'];
		$correo = $_POST['elCorreo'];
		$edad = $_POST['laEdad'];
		$peso = $_POST['elPeso'];
		$altura = $_POST['laAltura'];
		$genero = $_POST['elGenero'];
		$tipoPersona = $_POST['tipoPersona'];
		
		
		if(empty($nombre)){
			$errores[count($errores)] = "El campo nombre esta vacío";
			$seguir = false;
		}
		if($comprobarNombre=$conBD->comprobarNombre($nombre)){
			
			$errores[count($errores)] = "El nombre ya esta en uso";
			$seguir = false;
		}
		
		if(empty($pass)){
	
			$errores[count($errores)] = "El campo password está vacío";
			$seguir = false;
		}
		
		if(strlen($pass)< 10){
			
			$errores[count($errores)] = "El campo password es muy débil";
			$seguir = false;
		}
		
		if(empty($correo)){
	
			$errores[count($errores)] = "El campo correo está vacío";
			$seguir = false;
		}
		
		if($comprobarCorreo=$conBD->comprobarCorreo($correo)){
			
			$errores[count($errores)] = "El correo ya esta en uso";
			$seguir = false;
		}
		
		if(empty($edad)){
	
			$errores[count($errores)] = "El campo edad está vacío";
			$seguir = false;
		}
		
		if(empty($peso)){
	
			$errores[count($errores)] = "El campo peso está vacío";
			$seguir = false;
		}
		
		if(empty($altura)){
	
			$errores[count($errores)] = "El campo altura está vacío";
			$seguir = false;
		}
		
		if(empty($genero)){
	
			$errores[count($errores)] = "El campo genero está vacío";
			$seguir = false;
		}
		
		if(empty($tipoPersona)){
	
			$errores[count($errores)] = "El campo tipo persona está vacío";
			$seguir = false;
		}
		
		print_r($errores);
		
		if($seguir){
			session_start();
			$_SESSION['laSesion'] = $nombre;
			$usuarios=$conBD->registrarUsuario($nombre,$pass,$correo,$edad,$peso,$altura,$genero,$tipoPersona);
			// Registrar datos en base de datos
			header('Location: iniciarSesion.php');
		}
		else{
			
		for($i = 0; $i<count($errores); $i++){
			
			echo'<p class="error">'.$errores[$i].'</p><br>'; 
				}	
			}
	}
		
?>
		
	<body>

<?php
	
	include "header/header.php";
	
?>
		
		<div class="primerContenedor">
			<h2 class="h2-grande">REGISTRATE</h2>
			<h2 class="h2-arriba">Empieza desde hoy</h2>
		</div>
		
		<div class="formularioRegistro">
			
			<form id="crearFormulario" action="" method="post">
					<h2>Introduce tus datos</h2>
					<label>Nombre de usuario</label>
					<span class="campo"><input type="text" name="elNombre"></span>
					<br>
					<br>
					<label>Contraseña</label>
					<span class="campo"><input type="password" name="laPass"></span>
					<br>
					<br>
					<label>Introduce tu correo</label>
					<span class="email"><input type="email" name="elCorreo"></span>
					<br>
					<br>
					<label>Introduce tu edad</label>
					<span class="campo"><input type="number" name="laEdad"></span>
					<br>
					<br>
					<label>Introduce tu peso (en kg)</label>
					<span class="campo"><input type="number" name="elPeso"></span>
					<br>
					<br>
					<label>Introduce tu altura (en cm)</label>
					<span class="campo"><input type="number" name="laAltura"></span>
					<br>
					<br>
					<hr>
					<h2>Introduce tu género</h2>
					<p>Hombre<input type="radio" name="elGenero" value="Hombre"></p>
					<p>Mujer<input type="radio" name="elGenero" value="Mujer"></p>
					<br>
					<hr>
					<h2>¿Que tipo de persona eres?</h2>
					<p>Sedentario<input type="radio" name="tipoPersona" value="Sedentario"></p>
					<p>Ligero<input type="radio" name="tipoPersona" value="Ligero"></p>
					<p>Activo<input type="radio" name="tipoPersona" value="Activo"></p>
					<p>Muy activo<input type="radio" name="tipoPersona" value="Muy activo"></p>
					<hr>
					<br>
					<span class="elBoton"><input type="submit" name="enviarDatos" value="Enviar datos"></span>
					</form>
		</div>
		
			

	</body>
</html>