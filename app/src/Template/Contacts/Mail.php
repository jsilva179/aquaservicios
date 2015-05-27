<?php

	//$destinatario = "alejandro.zamora@rescate-it.net";
	//$destinatario = "contacto@inovatech.com.mx";
	$destinatario = "jalejandrozamora@gmail.com";
	$asunto = "Solicitud de Información en WEB";
	
	if(isset($_POST['submit'])) {
		
	$destinatario = "jorgesilva@prollux.com";
	$asunto = "Solicitud de Información en WEB";
	
	$cuerpo = "
		<html>
			<body style='background:#FFF;' align='center'>
				<head>
				   <title>AquaServicios</title>
				</head>
					<div >
						<div style='color:#767676 ;font-size: 50px;' > AquaServicios </div>
						<br>
						<table  border='1px black' align='center' style='border-collapse:collapse' cellpadding='5'  padding='2'>
							<tr>
								<td colspan='2' align='center'>Se a solicitado informac&iacute;on desde la Web</td>
							</tr>
							<tr>
								<td>Nombre: </td>
								<td>" . $_POST['nombre'] . "</td>
							</tr>
							<tr>
								<td>Email: </td>
								<td>" . $_POST['email'] . "</td>
							</tr>
							<tr>
								<td>Telefono: </td>
								<td>" . $_POST['telefono'] . "</td>
							</tr>
							<tr>
								<td>Mensaje: </td>
								<td>" . $_POST['mensaje'] . "</td>
							</tr>
						</table>			
					</div>
				</body>
		</html>
		";							
					
	}
	else
	{
		$cuerpo = "Script PHP no esta recibiendo _POST...";
	}		
	
	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	//dirección del remitente
	$headers .= "From: Contacto Web<jorgesilva@prollux.com>\r\n";
	mail($destinatario,$asunto,$cuerpo,$headers);
	header('Location: http://www.prollux.com/' );

?> 