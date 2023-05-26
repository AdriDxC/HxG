<!DOCTYPE html>
<html>
	<head>
		<title>HxG Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Página web de ejercicio en casa">
		<link rel="stylesheet" type="text/css" href="css/estilSeleccionar.css">
		<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script src="https://unpkg.com/scrollreveal"></script>
	</head>
	
	<body>
	
	<?php
	
	include_once "singleton/singleton.php";
	include "header/header.php";
	
	?>
	
	<?php
	 
	/* $conBD=Singleton::singleton();
	 
	 if(isset($_POST['contarEstrella'])){
		 
		 $sumarEstrellita=$conBD->sumarEstrellita($_SESSION['nombre']);
	 }
	 
*/
		$conBD=Singleton::singleton();
		
		$nivelPecho=$conBD->nivelPecho($_SESSION['nombre']);
		$nivelAbdomen=$conBD->nivelAbdomen($_SESSION['nombre']);
		$nivelPiernas=$conBD->nivelPiernas($_SESSION['nombre']);
		$nivelHombro=$conBD->nivelHombro($_SESSION['nombre']);
		
		echo $nivelPecho." ".$nivelAbdomen." ".$nivelPiernas." ".$nivelHombro;
		
	?>
		<div class="primerContenedor">
			<h2 class="h2-grande">BIENVENIDO</h2>
			<h2 class="h2-arriba"><?php echo $_SESSION['nombre']; ?>, selecciona tu grupo muscular</h2>
		</div>
		
		<?php
		
		include_once "seleccionarEntrenamiento-cuadros.php";
		
		?>
		<!--<form id="mandarFormulario" action="<?php // echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="submit" name="contarEstrella">
		</form>-->
		<!--
		<div class="segundoContenedor">
			<div class="segundoContenedor-cuadros">
			
		
				<div class="segundoContenedor-cuadro"><a href="ejercicios/pecho.php"><img src="imagenes/ejerciciosHome/flexiones.jpg"></a><h2>Pecho</h2></div>	
				<div class="segundoContenedor-cuadro"><a href="ejercicios/piernas.php"><img src="imagenes/ejerciciosHome/sentadillas.jpg"></a><h2>Piernas</h2></div>
				<div class="segundoContenedor-cuadro"><a href="ejercicios/abdominales.php"><img src="imagenes/ejerciciosHome/abdominales.jpg"></a><h2>Abdomen</h2></div>
				<div class="segundoContenedor-cuadro"><a href="ejercicios/hombro.php"><img src="imagenes/ejerciciosHome/hombro.jpg"></a><h2>Hombro</h2></div>
			</div>
		</div>
		<div class="tercerContenedor">
			<div class="tercer-cuadros">
				<div class="tercerContenedor-cuadro"><a href="ejercicios/pecho.php"><img src="imagenes/ejerciciosHome/collageEspecial.jpg"></a><h2>Entrenamiento super-especial</h2></div>
				
			</div>
		</div>
		-->
	</body>
	</html>