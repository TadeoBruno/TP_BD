<?php
   require "./administrador/database.php";
?>
<!DOCTYP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeatherNow</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<img src="img/logown.png.crdownload"> 
    Moscú
    <table>
        <div id="main-container">
	        <thead>
	           <tr>
	        	   <th>Mes</th><th>Temperatura promedio de cada mes(°C)</th>
	           </tr>
            </thead>
	        <?php
	           $sql="SELECT * FROM temp_meses_ciudades WHERE id_ciudad = 2";
	           $result=mysqli_query($conexion, $sql);
        
	           while($mostrar=mysqli_fetch_array($result)){
	        ?>
	        <tr> <td>Enero</td><td><?php echo $mostrar['enero'] ?></td> </tr>
	    	<tr> <td>Febreo</td><td><?php echo $mostrar['febrero'] ?></td> </tr>
            <tr> <td>Marzo</td><td><?php echo $mostrar['marzo'] ?></td> </tr>
            <tr> <td>Abril</td><td><?php echo $mostrar['abril'] ?></td> </tr>
            <tr> <td>Mayo</td><td><?php echo $mostrar['mayo'] ?></td> </tr>
            <tr> <td>Junio</td><td><?php echo $mostrar['junio'] ?></td> </tr>
	        <?php
	           }
	        ?>
	    </div>
    </table>
</body>
</html>