<!DOCTYPE html>
<html>
	<head>
		<title>HxG Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Página web de ejercicio en casa">
		<link rel="stylesheet" type="text/css" href="css/estilHome.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script src="https://unpkg.com/scrollreveal"></script>
	</head>
	
	<body>
		
		<?php
	
	include "header/header.php";
	
	?>
		
		<div class="primerContenedor">
			<h2 class="h2-grande">NUNCA</h2>
			<h2 class="h2-arriba">Es tarde para empezar</h2>
		</div>
		<div class="segundoContenedor">
			<div class="segundoContenedor-cuadros">
				<div class="segundoContenedor-cuadro"><a href="#primerCuadro"><img src="imagenes/fotoHome.jpg"></a><h2>¿Es necesario material deportivo?</h2></div>
				<div class="segundoContenedor-cuadro"><a href="#segundoCuadro"><img src="imagenes/fotoHome-2.jpg"></a><h2>¿Que entrenamientos voy a encontrar?</h2></div>
				<div class="segundoContenedor-cuadro"><a href="#tercerCuadro"><img src="imagenes/fotoHome-4.jpg"></a><h2>Ponte al día en el Ranking</h2></div>
				<div class="segundoContenedor-cuadro"><a href="#cuartoCuadro"><img src="imagenes/fotoHome.jpg"><h2></a>Lee las reseñas de nuestros usuarios</h2></div>
			</div>
		</div>
		<br>
		<hr>
		<div class="tercerContenedor">
			<a name="primerCuadro"></a>
			<h2>¿Es necesario estar en forma para utilizar esta aplicación?</h2>
			<p>La realidad es que NO</p>
			<p>No es necesario estar en forma para poder realizar los entrenamientos ya que cada persona tendrá sus ejercicios en base a sus características, con lo cual no.</p>			
		</div>
		<br>
		<br>
		<hr>
		<div class="cuartoContenedor">
			
			<h2>¿Es necesario tener material deportivo?</h2>
			<p>No es 100% necesario pero si que es recomendable tener alguno de los siguientes materiales: </p>
			<table>
				<thead>
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Enlace</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Muñequeras</td>
						<td>9,99€</td>
						<td><a href="https://www.decathlon.es/es/p/munequera-compresion-musculacion-fuerza-wristwrap/_/R-p-324386?mc=8581117&LGWCODE=2&gclid=CjwKCAjw__ihBhADEiwAXEazJtaDXxyP9TkoINqgbYZ-3BEFjI7WxlGSx6bsjB9g7tK9HSwLmGF_pxoC4aoQAvD_BwE&gclsrc=aw.ds" target="_blank"><button class="boton">Comprar</button></a></td>
					</tr>
					<tr>
						<td>Esterilla</td>
						<td>8,99€</td>
						<td><a href="https://www.decathlon.es/es/p/esterilla-fitness-tone-mat-verde-160-cm-x-58-cm-x-7-mm/_/R-p-333023?mc=8645170&LGWCODE=2&gclid=CjwKCAjw__ihBhADEiwAXEazJiBO6C-AfRcCiqnpQgRfVx_sqRE8nXOcsW7rg4vwQSovatGgmIHHthoCYcAQAvD_BwE&gclsrc=aw.ds" target="_blank"><button class="boton">Comprar</button></a></td>
					</tr>
					<tr>
						<td>Kettbell</td>
						<td>27,99€</td>
						<td><a href="https://www.decathlon.es/es/p/kettlebell-pesa-rusa-8-kg-cross-training-musculacion-corength/_/R-p-152873?mc=8354815&LGWCODE=2&gclid=CjwKCAjw__ihBhADEiwAXEazJkhMkpSHtSH_gsUIgzXDMVF-gCKfw4ZTcJWnRxgPPqrnPbUR6_EQIxoCfcgQAvD_BwE&gclsrc=aw.ds" target="_blank"><button class="boton">Comprar</button></a></td>
					</tr>
				</tbody>
			</table>
			<h2>Estos materiales pueden ser sustituidos por otros objetos</h2>
			<p>Estos son alguno de los ejemplos: </p>
			<table>
				<thead>
					<tr>
						<th>Producto</th>
						<th>Sustituto</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Esterilla</td>
						<td>Una manta</td>
					</tr>
					<tr>
						<td>Kettbell</td>
						<td>Garrafa de agua</td>
					</tr>
					<tr>
						<td>Pesas</td>
						<td>Mochila con libros, etc</td>
					</tr>
				</tbody>
			</table>			
		</div>
		<br>
		<br>
		<br>
		<hr>
		<a name="segundoCuadro"></a>
		<div class="quintoContenedor">
			<h2>Ejercicios típicos que encontrarás en los entrenamientos</h2>
			<br>
			<br>
			<div class="primerEjemplo">
				<div class="primerEjemplo-foto">
					<img src="imagenes/ejerciciosHome/abdominales.jpg">
				</div>
				<div class="primerEjemplo-texto">
				<h2>Abdominales</h2>
				</div>
			</div>
			
			<div class="segundoEjemplo">
			<div class="segundoEjemplo-texto">
				<h2>Flexiones</h2>
				</div>
				<div class="segundoEjemplo-foto">
					<img src="imagenes/ejerciciosHome/flexiones.jpg">
				</div>
			</div>
			
			<div class="primerEjemplo">
				<div class="primerEjemplo-foto">
					<img src="imagenes/ejerciciosHome/sentadillas.jpg">
				</div>
				<div class="primerEjemplo-texto">
				<h2>Sentadillas</h2>
				</div>
			</div>
			
			<div class="segundoEjemplo">
			<div class="segundoEjemplo-texto">
				<h2>Hombro</h2>
				</div>
				<div class="segundoEjemplo-foto">
				
					<img src="imagenes/ejerciciosHome/hombro.jpg">
				</div>
			</div>
			<div class="primerEjemplo">
				<div class="primerEjemplo-foto">
					<img src="imagenes/ejerciciosHome/sentadillas.jpg">
				</div>
				<div class="primerEjemplo-texto">
				<h2>Sentadillas</h2>
				</div>
			</div>
			
			<div class="segundoEjemplo">
			<div class="segundoEjemplo-texto">
				<h2>Hombro</h2>
				</div>
				<div class="segundoEjemplo-foto">
				
					<img src="imagenes/ejerciciosHome/hombro.jpg">
				</div>
			</div>				
		</div>
	<script src="index.js"></script>	
	<br>
	<br>
	<hr>
	<a name="tercerCuadro"></a>
		<div class="sextoContenedor">
			<h2>Ranking top 10 mejores usuarios</h2>
			<p>¿A que esperas para obtener el puesto que te mereces?</p>
		</div>
		
		<?php
	
			include_once "ranking.php";
	
		?>
	<br>
	<hr>
	<a name="cuartoCuadro"></a>
		<div class="septimoContenedor">
			<h2>Comentarios de nuestros usuarios</h2>
			<p>Consulta los comentarios más recientes de nuestros usuarios</p>
		</div>
		
		<?php
		if(isset($_POST['enviarComentario'])){
			
			$fecha_actual = date('Y-m-d'); 
			$anio = date('Y', strtotime($fecha_actual));
			$mes = date('m', strtotime($fecha_actual));
			$dia = date('d', strtotime($fecha_actual));
			$fechaCompleta = $anio."-".$mes."-".$dia;
			include_once 'singleton/singleton.php';
			$conBD=Singleton::singleton();
			$definirComentario=$conBD->escribirComentario($_SESSION['nombre'],$_POST['elComentario'],$fechaCompleta);
			
		}
			include_once "comentarios.php";
			
		?>
		<br>
		
		<?php
		
		if(isset($_SESSION['nombre'])){
			
		?>	
		
		<div class="contenedorEscribirComentario">
		<form action ="" method="POST">
			<textarea rows="8" cols="50" name="elComentario"></textarea><br><br>
			<input type="submit" name="enviarComentario" value="Enviar comentario">
		</form>
		</div>
		
		<?php
		
		}
		
		?>
		
	</body>
	
</html>