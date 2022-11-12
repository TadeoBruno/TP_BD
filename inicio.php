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
<img src="img/logown.png.crdownload"> 
   <div> <p style=" color:white; background:black; height:35px; " align="center">Tablero de Control</p></div>
<hr>
<br>	
</br>
<table>
        <div id="main-container">
	        <thead>
	           <tr>
	        	   <th>Ciudad</th><th>Temperatura promedio de los primeros 6 meses (°C)</th><th>Objetivo(°C)</th><th>Desvio</th><th>Estado</th><th>Ver temperatura de cada semana</th>
	           </tr>
            </thead>
	        <?php
	           $buenosaires="SELECT * FROM ciudades WHERE id_ciudad = 1";
	           $result=mysqli_query($conexion, $buenosaires);
               $mostrarbuenosaires=mysqli_fetch_array($result);

			   $tempmesesbsas="SELECT * FROM temp_meses_ciudades WHERE id_ciudad = 1";
			   $resulttempmesesbsas=mysqli_query($conexion, $tempmesesbsas);
			   $mostrartempmesesbsas=mysqli_fetch_array($resulttempmesesbsas);
	        ?>
	        <tr>
                    <td><?php echo $mostrarbuenosaires['nombre'] ?></td>
					<td><?php $promediotempbsas=(($mostrartempmesesbsas['enero'] + $mostrartempmesesbsas['febrero'] + $mostrartempmesesbsas['marzo'] + $mostrartempmesesbsas['abril'] + $mostrartempmesesbsas['mayo'] + $mostrartempmesesbsas['junio']) / 6);
					echo round($promediotempbsas, 1); ?></td>
					<td>entre 18°C y 24°C</td>
					<td><?php if ($promediotempbsas > 24){
                            echo round(($promediotempbsas - 24), 1);
					        } if ($promediotempbsas < 18){
						    echo round(($promediotempbsas - 18), 1);
							}?> </td>
					<td><?php if ($promediotempbsas > 17 and $promediotempbsas < 25){
	        	    	           echo "Temperatura ideal";
	    						} if ($promediotempbsas > 9 and $promediotempbsas < 31)  {
	    						  echo "Temperatura poco peligrosa";}
	        	                if ($promediotempbsas < 10 || $promediotempbsas > 30) {
	        	    			echo "Temperatura peligrosa";
	    					    }?></td>
					<td><a href="buenosaires.php" >Ver mas detalladamente...</td>
            </tr>
			<?php
	           $moscu="SELECT * FROM ciudades WHERE id_ciudad = 2";
	           $result2=mysqli_query($conexion, $moscu);
               $mostrarmoscu=mysqli_fetch_array($result2);

			   $tempmoscu="SELECT * FROM temp_meses_ciudades WHERE id_ciudad = 2";
			   $resulttempmesesmoscu=mysqli_query($conexion, $tempmoscu);
			   $mostrartempmesesmoscu=mysqli_fetch_array($resulttempmesesmoscu);
	        ?>
			<tr>
			        <td><?php echo $mostrarmoscu['nombre'] ?></td>
					<td><?php $promediotempmoscu=(($mostrartempmesesmoscu['enero'] + $mostrartempmesesmoscu['febrero'] + $mostrartempmesesmoscu['marzo'] + $mostrartempmesesmoscu['abril'] + $mostrartempmesesmoscu['mayo'] + $mostrartempmesesmoscu['junio']) / 6);
					echo round($promediotempmoscu, 1); ?></td>
					<td>entre 18°C y 24°C</td>
					<td><?php if ($promediotempmoscu > 24){
                            echo round(($promediotempmoscu - 24), 1);
					        } if ($promediotempmoscu < 18){
						    echo round(($promediotempmoscu - 18), 1);
							}?> </td>
					<td><?php if ($promediotempmoscu > 17 and $promediotempmoscu < 25){
	        	    	           echo "Temperatura ideal";
	    						} if ($promediotempmoscu > 9 and $promediotempmoscu < 31)  {
	    						  echo "Temperatura poco peligrosa";}
	        	                if ($promediotempmoscu < 10 || $promediotempmoscu > 30) {
	        	    			echo "Temperatura peligrosa";
	    					    }?></td>
					<td><a href="moscu.php" >Ver mas detalladamente...</td>
            </tr>
			<?php
	           $arabiasaudita="SELECT * FROM ciudades WHERE id_ciudad = 3";
	           $result3=mysqli_query($conexion, $arabiasaudita);
               $mostrararabiasaudita=mysqli_fetch_array($result3);

			   $temparabiasaudita="SELECT * FROM temp_meses_ciudades WHERE id_ciudad = 3";
			   $resulttempmesesarabiasaudita=mysqli_query($conexion, $temparabiasaudita);
			   $mostrartempmesesarabiasaudita=mysqli_fetch_array($resulttempmesesarabiasaudita);
	        ?>
			<tr>
			        <td><?php echo $mostrararabiasaudita['nombre'] ?></td>
					<td><?php $promediotemparabiasaudita=(($mostrartempmesesarabiasaudita['enero'] + $mostrartempmesesarabiasaudita['febrero'] + $mostrartempmesesarabiasaudita['marzo'] + $mostrartempmesesarabiasaudita['abril'] + $mostrartempmesesarabiasaudita['mayo'] + $mostrartempmesesarabiasaudita['junio']) / 6);
					echo round($promediotemparabiasaudita, 1); ?></td>
					<td>entre 18°C y 24°C</td>
					<td><?php if ($promediotemparabiasaudita > 24){
                            echo round(($promediotemparabiasaudita - 24), 1);
					        } if ($promediotemparabiasaudita < 18){
						    echo round(($promediotemparabiasaudita - 18), 1);
							}?> </td>
					<td><?php if ($promediotemparabiasaudita > 17 and $promediotemparabiasaudita < 25){
	        	    	           echo "Temperatura ideal";
	    						} if ($promediotemparabiasaudita > 9 and $promediotemparabiasaudita < 31)  {
	    						  echo "Temperatura poco peligrosa";}
	        	                if ($promediotemparabiasaudita < 10 || $promediotemparabiasaudita > 30) {
	        	    			echo "Temperatura peligrosa";
	    					    }?></td>
					<td><a href="arabiasaudita.php" >Ver mas detalladamente...</td>
            </tr>
			<?php
	           $argelia="SELECT * FROM ciudades WHERE id_ciudad = 4";
	           $result4=mysqli_query($conexion, $argelia);
               $mostrarargelia=mysqli_fetch_array($result4);

			   $tempargelia="SELECT * FROM temp_meses_ciudades WHERE id_ciudad = 4";
			   $resulttempmesesargelia=mysqli_query($conexion, $tempargelia);
			   $mostrartempmesesargelia=mysqli_fetch_array($resulttempmesesargelia);
	        ?>
			<tr>
		        	<td><?php echo $mostrarargelia['nombre'] ?></td>
					<td><?php $promediotempargelia=(($mostrartempmesesargelia['enero'] + $mostrartempmesesargelia['febrero'] + $mostrartempmesesargelia['marzo'] + $mostrartempmesesargelia['abril'] + $mostrartempmesesargelia['mayo'] + $mostrartempmesesargelia['junio']) / 6);
					echo round($promediotempargelia, 1); ?></td>
					<td>entre 18°C y 24°C</td>
					<td><?php if ($promediotempargelia > 24){
                            echo round(($promediotempargelia - 24), 1);
					        } if ($promediotempargelia < 18){
						    echo round(($promediotempargelia - 18), 1);
							} else {echo"<center>-";}?> </td>
					<td><?php if ($promediotempargelia > 17 and $promediotempargelia < 25){
	        	    	           echo "Temperatura ideal";
	    						} if (($promediotempargelia > 9 and $promediotempargelia < 18) || ($promediotempargelia > 24 and $promediotempargelia < 31))  {
	    						  echo "Temperatura poco peligrosa";}
	        	                if ($promediotempargelia < 10 || $promediotempargelia> 30) {
	        	    			echo "Temperatura peligrosa";
	    					    }?></td>
					<td><a href="argelia.php" >Ver mas detalladamente...</td>
	    </div>
</table>
    
</body>
</html>