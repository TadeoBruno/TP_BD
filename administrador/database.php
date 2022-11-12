<?php

$host="localhost";
$db="weathernowsystem";
$usuario="root";
$contrasenia="";

try{
  $conexion = new mysqli("localhost", "root", "", "weathernowsystem");
} catch (Exception $ex) {
  echo $ex->getMessage();
}
?>