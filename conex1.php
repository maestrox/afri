<?php
$usuario = "root";
$clave_acceso_bd = "";
$base_datos = "consolitex";
$conexion = @mysql_connect('127.0.0.1:3306', "$usuario", "$clave_acceso_bd");
@mysql_select_db($base_datos, $conexion);
?>