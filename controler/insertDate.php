<?php
 
$formated_DATE = date('Y-m-d');
$sql = "INSERT INTO acces (nombre_usuario, rol_usuario, fecha) VALUES ($nombre, $tipo_usuario, $formated_DATE)";

?>