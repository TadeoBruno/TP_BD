<?php
   require "./administrador/database.php";
?>
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
<img src="img/weathernow.png"> 
   <div> <p style=" color:white; background:black; height:35px; " align="center">Tablero de Control</p></div>
<hr>
<br>
<table width="90%" border="1" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="left"><span>Ventas -</span> <a href="" style=" color:black; ">Ver detalle...</a></td>
	</tr>
</table>	
</br>
<table>
    <div id="main-container">
	    <thead>
	       <tr>
	    	   <th>Ciudad</th><th>Temperatura promedio mensual(°C)</th><th>Desvio</th><th>Estado</th>
	       </tr>
        </thead>
	    <?php
	       $sql="SELECT * FROM ciudades";
	       $result=mysqli_query($conexion, $sql);
    
	       while($mostrar=mysqli_fetch_array($result)){
	    ?>
	    <tr>
	    	<td><?php echo $mostrar['nombre'] ?></td><td><?php echo $mostrar['temperatura'] ?></td><td></td><td><?php if ($mostrar['temperatura'] > 17 and $mostrar['temperatura'] < 25){
	    		           echo "Temperatura ideal";
	    	          } if ($mostrar['temperatura'] < 10 || $mostrar['temperatura'] > 30) {
	    				echo "Temperatura peligrosa";
	    			  } if ($mostrar['temperatura'] > 9 and $mostrar['temperatura'] < 31)  {
						echo "Temperatura poco peligrosa";
					  }?></td>
		</tr>
	    <?php
	       }
	    ?>
	</div>
</table>
    
</body>
</html>