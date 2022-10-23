<?php

$host="localhost";
$db="weathernowsystem";
$usuario="root";
$contrasenia="";

try {
  $conexion=new PDO("mysql:host=$host;dbname=$db", $usuario, $contrasenia );
  if($conexion){ echo "Conexion exitosa a la base de datos";}
} catch ( Exception $ex) {
  echo $ex->getMessage();
}
?>