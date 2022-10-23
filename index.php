<?php
/*if($_POST){
  header('Location:inicio.php');
}*/
session_start();
require 'administrador/database.php';
$usuario = $_POST['usuario'];
$contrasenia = ($_POST['contraseña']);

if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
  $records = $conexion->prepare("SELECT contrasenia, nombre FROM usuarios WHERE nombre = '$usuario'");
  $records->bindParam(':nombre', $usuario, 12);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  
  $message = '';

  if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contrasenia'])) {
    $_SESSION['id_usuario'] = $results['id'];
    header('Location: /inicio.php');
  } else {
    $message = 'Datos incorrectos';
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>WeatheNow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">  
</head>
  <body>
  <img src="img/weathernow.png">

  <div class="container">
    <div class="row">
    <div class="col-md-3">
        
    </div>
        <div class="col-md-6">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    Sistema de Administración general
                </div>
                <div class="card-body">
                   <form method="POST">

                   <div class = "form-group">
                   <label>Usuario:</label>
                   <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                   </div>
                   <div class="form-group">
                   <label>Contraseña:</label>
                   <input type="password" class="form-control" name="contraseña" placeholder="Escribe tu contraseña">
                   <hr>
                   <button type="submit" class="btn btn-primary">Ingresar</button>
                   </form>
                   
                   
                </div>

            </div>
            
        </div>
        
    </div>
    <?php if (!empty($message)) : ?>
      <p><?= $message ?></p>
    <?php endif;?>
  </div>
  </body>
</html>