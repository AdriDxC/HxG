<?php

include_once "../singleton/singleton.php"; 

include_once "abdominales_lista.php";
//echo $ejercicio1Basico["Nombre"];
//echo "<br>";
//print_r($ejercicio1Basico);
//print_r($abdominalesBasicos);

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
			$finalizarAbdomen=$conBD->terminarAbdomen($_SESSION['nombre']);
			// Registrar datos en base de datos
			header('Location: finalizar.php');
}
?>



<?php

if($estadoFisico < 2 && !isset($_POST['siguienteEjercicio']) && !isset($_POST['siguienteEjercicio-2'])){

?>

		<div class="primerContenedor">
			<h2 class="h2-grande">Abdominales básicos</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $abdominalesBasicos[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesBasicos[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesBasicos[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesBasicos[0]['Nombre'];?>.jpg">
			<form action="abdominales.php" method="post">
				<input type="submit" name="siguienteEjercicio">
			</form>
		</div>

<?php
}

if(isset($_POST['siguienteEjercicio'])){

?>
		<div class="primerContenedor">
			<h2 class="h2-grande">Abdominales básicos</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $abdominalesBasicos[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesBasicos[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesBasicos[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesBasicos[1]['Nombre'];?>.jpg">
			<form action="abdominales.php" method="post">
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
			<h2 class="h2-grande">Abdominales básicos</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<p>Nombre: <?php echo $abdominalesBasicos[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesBasicos[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesBasicos[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesBasicos[2]['Nombre'];?>.jpg">
			<form action="" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>
<?php
}

if($estadoFisico >= 2 && !isset($_POST['siguienteEjercicio-medio']) && !isset($_POST['siguienteEjercicio-medio-2'])){
	
?>

		<div class="primerContenedor">
			<h2 class="h2-grande">Abdominales medios</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>Abdominales medios</h1>
			<p>Nombre: <?php echo $abdominalesMedios[0]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesMedios[0]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesMedios[0]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesMedios[0]['Nombre'];?>.jpg">
			<form action="abdominales.php" method="post">
				<input type="submit" name="siguienteEjercicio-medio">
			</form>
		</div>


<?php

}
if(isset($_POST['siguienteEjercicio-medio'])){

?>
		<div class="primerContenedor">
			<h2 class="h2-grande">Abdominales medios</h2>
			<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>Abdominales medios</h1>
			<p>Nombre: <?php echo $abdominalesMedios[1]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesMedios[1]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesMedios[1]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesMedios[1]['Nombre'];?>.jpg">
			<form action="abdominales.php" method="post">
				<input type="submit" name="siguienteEjercicio-medio-2">
			</form>
		</div>

<?php
}
if(isset($_POST['siguienteEjercicio-medio-2'])){
	
?>
		<div class="primerContenedor">
					<h2 class="h2-grande">Abdominales medios</h2>
					<h2 class="h2-arriba">Adelante</h2>
		</div>
		<div class="contenedorEjercicios">
			<h1>Abdominales medios</h1>
			<p>Nombre: <?php echo $abdominalesMedios[2]['Nombre'];	 ?></p>
			<p>Series: <?php echo $abdominalesMedios[2]['Series'];	 ?></p>
			<p>Repeticiones: <?php echo $abdominalesMedios[2]['Repeticiones'];	 ?></p>
			<img src="imagenes/Abdomen/<?php echo $abdominalesMedios[2]['Nombre'];?>.jpg">
			<form action="" method="post">
				<input type="submit" name="entrenamientoCompletado">
			</form>
		</div>

<?php
}

?>

	</body>
</html>