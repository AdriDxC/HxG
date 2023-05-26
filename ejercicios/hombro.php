<?php
include_once "../singleton/singleton.php";

include_once "hombro_lista.php";




//echo $ejercicio1Basico["Nombre"];
//echo "<br>";
//print_r($ejercicio1Basico);
//print_r($hombroBasicos);

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
			$finalizarhombro=$conBD->terminarHombro($_SESSION['nombre']);
			// Registrar datos en base de datos
			header('Location: finalizar.php');
}
?>

<?php

if($estadoFisico < 2 && !isset($_POST['siguienteEjercicio']) && !isset($_POST['siguienteEjercicio-2'])){

?>

		<div class="primerContenedor">
			<h2 class="h2-grande">hombro - Nivel básico</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>

		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $hombroBasicos[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroBasicos[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroBasicos[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/<?php echo $hombroBasicos[0]['Nombre'];?>.jpg">
			<form action="hombro.php" method="post">
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
			<h2 class="h2-grande">hombro - Nivel básico</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $hombroBasicos[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroBasicos[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroBasicos[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/<?php echo $hombroBasicos[1]['Nombre'];?>.jpg">
			<form action="hombro.php" method="post">
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
					<h2 class="h2-grande">hombro - Nivel básico</h2>
					<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $hombroBasicos[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroBasicos[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroBasicos[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/<?php echo $hombroBasicos[2]['Nombre'];?>.jpg">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>
<?php
}

if($estadoFisico >= 2 && !isset($_POST['siguienteEjercicio-medio']) && !isset($_POST['siguienteEjercicio-2-medio'])){
	
?>



		<div class="primerContenedor">
			<h2 class="h2-grande">hombro - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>

		<div class="contenedorEjercicios">
			<h1>hombro medio</h1>
			<p>Nombre: <?php echo $hombroMedios[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroMedios[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroMedios[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/hombro/<?php echo $hombroMedios[0]['Nombre'];?>.png">
			<form action="hombro.php" method="post">
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
			<h2 class="h2-grande">hombro - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>hombro medio</h1>
			<p>Nombre: <?php echo $hombroMedios[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroMedios[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroMedios[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/hombro/<?php echo $hombroMedios[1]['Nombre'];?>.png">
			<form action="hombro.php" method="post">
				<input type="submit" name="siguienteEjercicio-2-medio">
			</form>
		</div>

<?php

}

if(isset($_POST['siguienteEjercicio-2-medio'])){
	
?>

		<div class="primerContenedor">
			<h2 class="h2-grande">hombro - Nivel medio</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>hombro medio</h1>
			<p>Nombre: <?php echo $hombroMedios[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $hombroMedios[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $hombroMedios[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/hombro/<?php echo $hombroMedios[2]['Nombre'];?>.png">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>

<?php
}

?>

</body>
</html>