
<?php

$piernasBasicos = [];
$piernasMedios = [];

$ejercicio1Basico = [
	"Nombre" => "Sentadillas",
	"Series" => 2,
	"Repeticiones" => 6
];

$ejercicio2Basico = [
	"Nombre" => "Zancadas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio3Basico = [
	"Nombre" => "Sentadillas profundas",
	"Series" => 4,
	"Repeticiones" => 12
];

$ejercicio1Medio = [
	"Nombre" => "Sentadillas",
	"Series" => 3,
	"Repeticiones" => 6
];

$ejercicio2Medio = [
	"Nombre" => "Zancadas",
	"Series" => 4,
	"Repeticiones" => 15
];

$ejercicio3Medio = [
	"Nombre" => "Sentadillas profundas",
	"Series" => 4,
	"Repeticiones" => 12
];

$piernasBasicos[0] = $ejercicio1Basico;
$piernasBasicos[1] = $ejercicio2Basico;
$piernasBasicos[2] = $ejercicio3Basico;

$piernasMedios[0] = $ejercicio1Medio;
$piernasMedios[1] = $ejercicio2Medio;
$piernasMedios[2] = $ejercicio3Medio;

session_start();
$conBD=Singleton::singleton();
$estadoFisico=$conBD->nivelPiernas($_SESSION['nombre']);

?>