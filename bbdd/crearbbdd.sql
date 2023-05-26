CREATE DATABASE HxG_bd;
use HxG_bd;

CREATE TABLE usuario(

id_usuario int AUTO_INCREMENT PRIMARY KEY,
nombre_usuario VARCHAR(150),
pass_usuario VARCHAR(20),
correo_usuario VARCHAR(20),
edad_usuario int(3),
peso_usuario int(3),
altura_usuario int(3),
genero_usuario VARCHAR(10),
tipo_usuario VARCHAR(20),
pecho_usuario VARCHAR(2) NULL,
abdominales_usuario VARCHAR(2) NULL,
pierna_usuario VARCHAR(2) NULL,
hombro_usuario VARCHAR(2) NULL,
estrellitas_usuario VARCHAR(2) NULL
);

CREATE TABLE comentario(
usuario_comentario VARCHAR(100),
comentario_comentario VARCHAR(800),
fecha_comentario DATE);

INSERT INTO usuario(nombre_usuario, pass_usuario, correo_usuario, edad_usuario, peso_usuario, altura_usuario, genero_usuario, tipo_usuario)
VALUES
('adridxc','adrian99','adrian@gmail.com', '23', '80', '175', 'hombre', 'deportista');

INSERT INTO comentario(usuario_comentario, comentario_comentario, fecha_comentario)
VALUES
('adridxc', 'Me gusta mucho la APP, desde que la utilizo mi calidad de vida ha mejorado', '2023-05-19');

INSERT INTO comentario(usuario_comentario, comentario_comentario, fecha_comentario)
VALUES
('marijose', 'Me gusta mucho la APP, desde que la utilizo mi calidad de vida ha mejorado', '2023-05-19');
