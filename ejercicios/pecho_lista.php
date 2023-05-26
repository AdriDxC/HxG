<?php

$pechoBasicos = [];
$pechoMedios = [];

$ejercicio1Basico = [
	"Nombre" => "Flexiones",
	"Series" => 3,
	"Repeticiones" => 6
];

$ejercicio2Basico = [
	"Nombre" => "Flexiones con apoyo en la pared",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio3Basico = [
	"Nombre" => "Flexiones con apoyo de rodillas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio1Medio = [
	"Nombre" => "Flexiones",
	"Series" => 4,
	"Repeticiones" => 6
];

$ejercicio2Medio = [
	"Nombre" => "Flexiones con apoyo en la pared",
	"Series" => 4,
	"Repeticiones" => 15
];

$ejercicio3Medio = [
	"Nombre" => "Flexiones con apoyo de rodillas",
	"Series" => 4,
	"Repeticiones" => 12
];

$pechoBasicos[0] = $ejercicio1Basico;
$pechoBasicos[1] = $ejercicio2Basico;
$pechoBasicos[2] = $ejercicio3Basico;

$pechoMedios[0] = $ejercicio1Medio;
$pechoMedios[1] = $ejercicio2Medio;
$pechoMedios[2] = $ejercicio3Medio;

session_start();

$conBD=Singleton::singleton();
$estadoFisico=$conBD->nivelPecho($_SESSION['nombre']);

?>