<?php


$hombroBasicos = [];
$hombroMedios = [];

$ejercicio1Basico = [
	"Nombre" => "Movimientos laterales",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio2Basico = [
	"Nombre" => "Flexiones sencillas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio3Basico = [
	"Nombre" => "Alas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio1Medio = [
	"Nombre" => "Movimientos laterales",
	"Series" => 3,
	"Repeticiones" => 24
];

$ejercicio2Medio = [
	"Nombre" => "Flexiones sencillas",
	"Series" => 3,
	"Repeticiones" => 24
];

$ejercicio3Medio = [
	"Nombre" => "Alas",
	"Series" => 3,
	"Repeticiones" => 24
];

$hombroBasicos[0] = $ejercicio1Basico;
$hombroBasicos[1] = $ejercicio2Basico;
$hombroBasicos[2] = $ejercicio3Basico;

$hombroMedios[0] = $ejercicio1Medio;
$hombroMedios[1] = $ejercicio2Medio;
$hombroMedios[2] = $ejercicio3Medio;

session_start();

$conBD=Singleton::singleton();
$estadoFisico=$conBD->nivelHombro($_SESSION['nombre']);

?>