<?php

include_once "singleton/singleton.php";

session_start();

$conBD=Singleton::singleton();

$actualizadoKg = 80;

$actualizarKg=$conBD->actualizarKg($actualizadoKg, $_SESSION['nombre']);

?>