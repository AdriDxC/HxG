<?php

echo '<div class="segundoContenedor">
			<div class="segundoContenedor-cuadros">';
			
			
			if($nivelPecho <= $nivelAbdomen && $nivelPecho <= $nivelPiernas && $nivelPecho <= $nivelHombro){
			
				echo '<div class="segundoContenedor-cuadro"><a href="ejercicios/pecho.php"><img src="imagenes/ejerciciosHome/flexiones.jpg"></a><h2>Pecho</h2></div>';
			
			
			}
			if($nivelPiernas <= $nivelAbdomen && $nivelPiernas <= $nivelPecho && $nivelPiernas <= $nivelHombro){
				echo '<div class="segundoContenedor-cuadro"><a href="ejercicios/piernas.php"><img src="imagenes/ejerciciosHome/sentadillas.jpg"></a><h2>Piernas</h2></div>';
			
			}
			if($nivelAbdomen <= $nivelPecho && $nivelAbdomen <= $nivelHombro && $nivelAbdomen <= $nivelPiernas){
				
				echo '<div class="segundoContenedor-cuadro"><a href="ejercicios/abdominales.php"><img src="imagenes/ejerciciosHome/abdominales.jpg"></a><h2>Abdomen</h2></div>';
			}
			if($nivelHombro <= $nivelAbdomen && $nivelHombro <= $nivelPecho && $nivelHombro <= $nivelPiernas){
				
				echo '<div class="segundoContenedor-cuadro"><a href="ejercicios/hombro.php"><img src="imagenes/ejerciciosHome/hombro.jpg"></a><h2>Hombro</h2></div>';
			}
			
		echo	'</div>
		</div>
		<div class="tercerContenedor">
			<div class="tercer-cuadros">
				<div class="tercerContenedor-cuadro"><a href="ejercicios/pecho.php"><img src="imagenes/ejerciciosHome/collageEspecial.jpg"></a><h2>Entrenamiento super-especial</h2></div>
				
			</div>
		</div>';
		
?>