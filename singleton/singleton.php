<?php

    class Singleton{
        private $idb;
        private $filas=array();
        private static $instancia;

        private function __construct(){
            $this->idb=new PDO("mysql:dbname=HxG_bd;host=localhost","root","");
        }

        public static function singleton(){
            if(!isset(self::$instancia)){
                $miclase=__CLASS__;
                self::$instancia=new $miclase;
            }
            return self::$instancia;
        }

        public function __clone(){
            trigger_error("La clonacion de este objeto no esta permitida", E_USER_ERROR);
        }
		
		public function registrarUsuario($nombre,$password,$correo,$edad, $peso, $altura, $genero, $tipoPersona){
            try {
                $consulta=$this->idb->prepare("insert into usuario (nombre_usuario,pass_usuario,correo_usuario,edad_usuario,peso_usuario,altura_usuario,genero_usuario,tipo_usuario) values (?,?,?,?,?,?,?,?)");
                $consulta->bindparam(1,$nombre);
                $consulta->bindparam(2,$password);
                $consulta->bindparam(3,$correo);
                $consulta->bindparam(4,$edad);
				$consulta->bindparam(5,$peso);
				$consulta->bindparam(6,$altura);
				$consulta->bindparam(7,$genero);
				$consulta->bindparam(8,$tipoPersona);
                $consulta->execute();
				
				$consulta=$this->idb->prepare("UPDATE usuario SET pecho_usuario=0 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
				
				$consulta=$this->idb->prepare("UPDATE usuario SET pierna_usuario=0 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
				
				$consulta=$this->idb->prepare("UPDATE usuario SET hombro_usuario=0 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
				
				$consulta=$this->idb->prepare("UPDATE usuario SET abdominales_usuario=0 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
				
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function comprobarNombre($nombre){
            try {
                $consulta=$this->idb->prepare("select * from usuario where nombre_usuario=?");
                $consulta->bindparam(1,$nombre);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        //return $fila["nombre_usuario"];
						return true;
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function comprobarCorreo($correo){
            try {
                $consulta=$this->idb->prepare("select * from usuario where correo_usuario=?");
                $consulta->bindparam(1,$correo);
                $consulta->execute();
				
                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        //return $fila["correo_usuario"];
						return true;
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		 public function iniciarSesion($nombre, $pass){
            try {
                $consulta=$this->idb->prepare("select * from usuario where nombre_usuario=? AND pass_usuario=?");
                $consulta->bindparam(1,$nombre);
				$consulta->bindparam(2,$pass);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
						
                        //return $fila["nombre_usuario"];
						return true;
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
	
		public function terminarPecho($nombre){
            try {
                $consulta=$this->idb->prepare("UPDATE usuario SET pecho_usuario=pecho_usuario+1 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function terminarPierna($nombre){
            try {
                $consulta=$this->idb->prepare("UPDATE usuario SET pierna_usuario=pierna_usuario+1 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function terminarHombro($nombre){
            try {
                $consulta=$this->idb->prepare("UPDATE usuario SET hombro_usuario=hombro_usuario+1 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function terminarAbdomen($nombre){
            try {
                $consulta=$this->idb->prepare("UPDATE usuario SET abdominales_usuario=abdominales_usuario+1 WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
                $consulta->execute();
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function sumarEstrellita($nombre){
            try {
				
				
				$consulta=$this->idb->prepare("select * from usuario WHERE nombre_usuario=?");
				$consulta->bindparam(1,$nombre);
				$consulta->execute();
				
				 while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
					 
						if($fila["pierna_usuario"] >= 1 && $fila["abdominales_usuario"] >= 1 && $fila["hombro_usuario"] >= 1 && $fila["pecho_usuario"] >= 1){
						echo "<p>ENHORABUENA!!</p>";
						$consulta=$this->idb->prepare("UPDATE usuario SET estrellitas_usuario=1 WHERE nombre_usuario=?");
						$consulta->bindparam(1,$nombre);
						$consulta->execute();
			
						}
				 }
				
			}
			catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function rankingUsuarios(){
            try {
				$consulta=$this->idb->prepare("select nombre_usuario, estrellitas_usuario from usuario ORDER BY estrellitas_usuario DESC LIMIT 8");
				$consulta->execute();
				
				echo "<table>";
				
				echo "<thead>";
				echo "<tr>";
						
                        echo "<td>Nombre</td>";
						echo "<td>Cantidad Estrellitas</td>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				
				$cont = 1;
				
				
				 while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
					 
					 
					 echo "<tr>";
                     
                     echo "<td class=numero".$cont.">".$fila["nombre_usuario"]."</td>";
					echo "<td class=numero".$cont.">".$fila["estrellitas_usuario"]."</td>";
					echo "</tr>";
					
					
					$cont++;
					
			
						}
					echo "</tbody>";
					echo "</table>";
        
					 
				 }
			catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function mostrarComentarios(){
            try {
				$consulta=$this->idb->prepare("select * from comentario");
				$consulta->execute();
				
				echo '<div class="contenedorComentario">';
				
				 while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
					 
					 echo '<div class="cajaComentario">';
					 
					 echo "<h1>".$fila['usuario_comentario']."</h1>";
					 echo "<hr>";
					 echo "<p>".$fila['comentario_comentario']."</p>";
					 echo "<p>".$fila['fecha_comentario']."</p>";
					 
					 echo "</div>";
			
						}
						
				echo "</div>";
        
					 
				 }
			catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
		
		public function escribirComentario($nombre, $comentario, $fecha_comentario){
			
			try {
                $consulta=$this->idb->prepare("insert into comentario (usuario_comentario,comentario_comentario,fecha_comentario) values (?,?,?)");
                $consulta->bindparam(1,$nombre);
                $consulta->bindparam(2,$comentario);
				$consulta->bindparam(3,$fecha_comentario);
                $consulta->execute();
				
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
			
		
		public function nivelPecho($nombre){
            try {
                $consulta=$this->idb->prepare("select pecho_usuario from usuario where nombre_usuario=?");
                $consulta->bindparam(1,$nombre);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        
						return $fila["pecho_usuario"];
							
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
	}
	
	public function nivelAbdomen($nombre){
            try {
                $consulta=$this->idb->prepare("select abdominales_usuario from usuario where nombre_usuario=?");
                $consulta->bindparam(1,$nombre);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        
						return $fila["abdominales_usuario"];
							
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
	}
	
	public function nivelPiernas($nombre){
            try {
                $consulta=$this->idb->prepare("select pierna_usuario from usuario where nombre_usuario=?");
                $consulta->bindparam(1,$nombre);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        
						return $fila["pierna_usuario"];
							
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
	}
	
	public function nivelHombro($nombre){
            try {
                $consulta=$this->idb->prepare("select hombro_usuario from usuario where nombre_usuario=?");
                $consulta->bindparam(1,$nombre);
                $consulta->execute();

                    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                        
						return $fila["hombro_usuario"];
							
                    }
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
	}
	
		public function actualizarKg($kg, $nombre){
            try {
                $consulta=$this->idb->prepare("UPDATE usuario SET peso_usuario=? WHERE nombre_usuario=?");
				$consulta->bindparam(1,$kg);
				$consulta->bindparam(2,$nombre);
                $consulta->execute();
            } catch (PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
	
}
			
?>