<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeatherNow</title>

	<link rel="stylesheet" href="./css/bootstrap.min.css.crdownload" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
<body>

<img src="img/weathernow.png">
	<table width="0%" border="2" height="100px" bordercolor="#FFFFFF" align="center" cellpadding="70" cellspacing="0" bgcolor="#38EED8">
	<tr>
		<td height="120" align="center" bordercolor="#FFFFFF" bgcolor="#34495E">
			<div><b style="color:white;">Tablero de control</b></div>
			<div><b style="color:white;">Sistema de Administración General</b></div>
			<hr width="300">
			<table align="center" width="105%" height="115" bordercolor="#FFFFFF" bgcolor="#38EED8">
				<form name="login" method="post" action="verificar.asp">
					<tr>
						<td colspan="2" align="center" bgcolor="#34495E"><b style="color:white;">Ingreso al sistema</b></span></td>
					</tr>
					<tr>
						<td width="84" bgcolor="#34495E" <p style="color:white;">Usuario</p></td>
					    <td width="196" bgcolor="#34495E"><input type="text" name="usuario"></td>
					</tr>
					<tr>
						<td bgcolor="#34495E"><p style="color:white;">Contraseña</p></td>
					    <td bgcolor="#34495E"><input type="password" name="contraseña"></td>
					</tr>
					<tr>
					  <td height="30" colspan="2" align="center" bordercolor="#FFFFFF" bgcolor="#34495E"><p>
						<button type ="button" class="btn btn-outline-light" onclick=location.href="administrador/xd.php">Ingresar</button>
				        </p>
				      
				  </form>
		  </table>
		</td>
	</tr>
</table>
    
</body>
</html>