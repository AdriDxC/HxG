<?php

session_start();

echo '<header>
			<div class="logo">
				<img src="imagenes/logo.png">
			</div>
			<nav>
				<a href="home.php" class="nav-link">Home</a>';
			if(!isset($_SESSION['nombre'])){
				
				echo '<a href="iniciarSesion.php" class="nav-link">Iniciar sesión</a>';
				
			}else{
				
				echo '<a href="cerrarSesion.php" class="nav-link">Cerrar sesión</a>';
			}
				
				echo '<a href="registro.php" class="nav-link">Registrate</a>';
				
				if(isset($_SESSION['nombre'])){
				
				echo '<a href="seleccionarEntrenamiento.php" class="nav-link">Entrenar</a>';
				echo '<a href="perfil.php" class="nav-link">Perfil</a>';
					
				}
				
			echo '</nav>
		</header>';
		
?>