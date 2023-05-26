<?php

include_once "singleton/singleton.php";

$conBD=Singleton::singleton();
$mostrarRanking=$conBD->rankingUsuarios();

?>
