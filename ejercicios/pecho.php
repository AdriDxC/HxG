<?php
include_once "../singleton/singleton.php";

include_once "pecho_lista.php";




//echo $ejercicio1Basico["Nombre"];
//echo "<br>";
//print_r($ejercicio1Basico);
//print_r($pechoBasicos);

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>HxG</title>
<link rel="stylesheet" type="text/css" href="css/estiloEjercicios.css">
<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
</head>
<body>

<header>
			<div class="logo">
				<img src="imagenes/logo.png">
			</div>
			<nav>
				<a href="../home.php" class="nav-link">Inicio</a>
			</nav>
</header>



<?php

if(isset($_POST['entrenamientoCompletado'])){
			
			$conBD=Singleton::singleton();
			$finalizarPecho=$conBD->terminarPecho($_SESSION['nombre']);
			// Registrar datos en base de datos
			header('Location: finalizar.php');
}
?>

<?php

if($estadoFisico < 2 && !isset($_POST['siguienteEjercicio']) && !isset($_POST['siguienteEjercicio-2'])){

?>

		<div class="primerContenedor">
			<h2 class="h2-grande">Pecho - Nivel básico</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>

		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $pechoBasicos[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoBasicos[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoBasicos[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoBasicos[0]['Nombre'];?>.png">
			<form action="pecho.php" method="post">
				<input type="submit" name="siguienteEjercicio">
			</form>
		</div>

<?php

}

?>

<?php

if(isset($_POST['siguienteEjercicio'])){

?>
		<div class="primerContenedor">
			<h2 class="h2-grande">Pecho - Nivel básico</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $pechoBasicos[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoBasicos[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoBasicos[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoBasicos[1]['Nombre'];?>.png">
			<form action="pecho.php" method="post">
				<input type="submit" name="siguienteEjercicio-2">
			</form>
		</div>

<?php

}

?>

<?php

if(isset($_POST["siguienteEjercicio-2"])){
	

?>

		<div class="primerContenedor">
					<h2 class="h2-grande">Pecho - Nivel básico</h2>
					<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $pechoBasicos[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoBasicos[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoBasicos[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoBasicos[2]['Nombre'];?>.png">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>
<?php
}

if($estadoFisico >= 2 && !isset($_POST['siguienteEjercicio-medio']) && !isset($_POST['siguienteEjercicio-2-medio'])){
	
?>



		<div class="primerContenedor">
			<h2 class="h2-grande">Pecho - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>

		<div class="contenedorEjercicios">
			<h1>Pecho medio</h1>
			<p>Nombre: <?php echo $pechoMedios[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoMedios[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoMedios[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoMedios[0]['Nombre'];?>.png">
			<form action="pecho.php" method="post">
				<input type="submit" name="siguienteEjercicio-medio">
			</form>
		</div>
<?php

}

?>

<?php

if(isset($_POST['siguienteEjercicio-medio'])){

?>
		<div class="primerContenedor">
			<h2 class="h2-grande">Pecho - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>Pecho medio</h1>
			<p>Nombre: <?php echo $pechoMedios[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoMedios[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoMedios[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoMedios[1]['Nombre'];?>.png">
			<form action="pecho.php" method="post">
				<input type="submit" name="siguienteEjercicio-2-medio">
			</form>
		</div>

<?php

}

if(isset($_POST['siguienteEjercicio-2-medio'])){
	
?>

		<div class="primerContenedor">
			<h2 class="h2-grande">Pecho - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>Pecho medio</h1>
			<p>Nombre: <?php echo $pechoMedios[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $pechoMedios[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $pechoMedios[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/Pecho/<?php echo $pechoMedios[2]['Nombre'];?>.png">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>

<?php
}

?>

</body>
</html>