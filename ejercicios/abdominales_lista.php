<?php


$abdominalesBasicos = [];
$abdominalesMedios = [];

$ejercicio1Basico = [
	"Nombre" => "Crunch",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio2Basico = [
	"Nombre" => "Tijeras",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio3Basico = [
	"Nombre" => "Levantar piernas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio1Medio = [
	"Nombre" => "Crunch",
	"Series" => 3,
	"Repeticiones" => 24
];

$ejercicio2Medio = [
	"Nombre" => "Tijeras",
	"Series" => 3,
	"Repeticiones" => 24
];

$ejercicio3Medio = [
	"Nombre" => "Levantar piernas",
	"Series" => 3,
	"Repeticiones" => 24
];

$abdominalesBasicos[0] = $ejercicio1Basico;
$abdominalesBasicos[1] = $ejercicio2Basico;
$abdominalesBasicos[2] = $ejercicio3Basico;

$abdominalesMedios[0] = $ejercicio1Medio;
$abdominalesMedios[1] = $ejercicio2Medio;
$abdominalesMedios[2] = $ejercicio3Medio;

session_start();

$conBD=Singleton::singleton();
$estadoFisico=$conBD->nivelAbdomen($_SESSION['nombre']);

?>