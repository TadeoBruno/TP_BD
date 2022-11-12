<?php
session_start();
require "./administrador/database.php";
/*if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
  $records = $conexion->prepare('SELECT id, contrasenia, nombre, apellido FROM usuarios WHERE nombre=:usuario and contrasenia=:contrasena');
  $records->bindParam(':nombre', $_POST['usuario']);
  $records->bindParam(':contrasenia', $_POST['contrasena']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $message = '';
  if (is_count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasenia'])) {
    $_SESSION['id_usuario'] = $results['id'];
    header('Location: /inicio.php');
  } else {
    $message = 'Datos incorrectos'; 
  }
}
  
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  $validar_login = mysqli_query($conexion, "SELECT nombre, contrasenia FROM usuarios WHERE nombre='$usuario' and contrasenia='$contrasena'");
  

  if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;
    header('Location: /inicio.php');
    exit;
  } else {
    echo '
      <script>
       alert("Usuario no existe");
       window.location = "index.php";
      </script>
    ';
    exit;
  }*/
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
  <img src="img/logown.png.crdownload"> 

  <?php
      if(isset($_POST['ingresar'])){
        if(empty($_POST['usuario']) || empty($_POST['contrasena'])){
           echo "<script language='JavaScript'>
           alert('El nombre o contraseña no han sido ingresados, por favor verifique los datos');
           location.assign('index.php');
           </script>";
          } else{
          include("./administrador/database.php");
          $usuario=$_POST['usuario'];
          $contrasena=$_POST['contrasena'];
          $sql="SELECT * FROM usuarios WHERE nombre='".$usuario."' and contrasenia='".$contrasena."'";
          $resultado = mysqli_query($conexion, $sql) or die ('Error: '. mysqli_error($conexion));
        }
          if($fila=mysqli_fetch_assoc($resultado)){
            echo "<script language='JavaScript'>
           alert('Bienvenido $usuario');
           location.assign('inicio.php');
           </script>";
          }else{
            echo "<script language='JavaScript'>
           alert('El usuario o contraseña son erroneos');
           location.assign('index.php');
           </script>";
          }
      }
  ?>
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
                   <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

                   <div class = "form-group">
                   <label>Usuario:</label>
                   <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                   </div>
                   <div class="form-group">
                   <label>Contraseña:</label>
                   <input type="password" class="form-control" name="contrasena" placeholder="Escribe tu contraseña">
                   <hr>
                   <button type="submit" class="btn btn-primary" name="ingresar">Ingresar</button>
                   </form>
                   
                   
                </div>

            </div>
            
        </div>
        <?php if($conexion){ echo "<center><h4>Conexion exitosa a la base de datos</h4></center>";} ?>;
    </div>
    <?php if (!empty($message)) : ?>
      <p><?= $message ?></p>
    <?php endif;?>
  </div>
  <?php
  ?>
  </body>
</html>