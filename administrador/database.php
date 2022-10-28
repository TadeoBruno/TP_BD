<?php

$host="localhost";
$db="weathernowsystem";
$usuario="root";
$contrasenia="";

try{
  $conexion = new mysqli("localhost", "root", "", "weathernowsystem");
  if($conexion){ echo "Conexion exitosa a la base de datos";}
} catch (Exception $ex) {
  echo $ex->getMessage();
}
?>