<?php
include 'config/conecta.php';

$solicitudDepto=$_POST['soporte']; 


switch ($solicitudDepto) 
{
	// DEPARTAMENTO DE SISTEMAS
    case 'SISTEMAS':
	$sucursal=$_POST['sucursal'];
	$nombresolicitante=$_POST['nombresolicitante'];
	$fecha=$_POST['fecha'];
	$hora=$_POST['hora'];
	$tipoSoporte=$_POST['tipoSoporte'];
	$nivelUrgencia=$_POST['nivelUrgencia'];
	$descripcionFallo=$_POST['descripcionFallo'];
	$user=$_POST['user']; 
	
		$insert=mysql_query("INSERT into SOLICITUDES (CF_idDepartamento,CF_idUsuario,solicitante,fechas,horas,solicitud)
							VALUES ('1','$user','$nombresolicitante','$fecha','$hora','$descripcionFallo') ",$link);		
		//echo $user;
		$sql=mysql_query("SELECT correoElectronico
							FROM usuarios 
							WHERE CF_idDepartamento=1",$link);
		$numColaboradores=mysql_num_rows($sql); 
		
		while($row = mysql_fetch_array($sql))
			{
			    $mailfrom=$row['correoElectronico'];            
				$subject="SOLICITUD DE SOPORTE";
				$mensaje="Solicitud de Soporte Para: ".$sucursal."\n ".
						 "Descripcion \n".$descripcionFallo;
				$headers = "From: "."soporte@grupogamas.com.mx";
				
				mail($mailfrom,$subject,$mensaje,$headers);
			} 
		if ($insert){
			echo "<script languaje='javascript' type='text/javascript'> 
				alert(\"La Solicitud Ha Sido Enviada\");
				document.location =\"sucursales/index.php\";
				</script>";
		}
        break;
		
		
	// DEPARTAMENTO DE MERCADOTECNIA		
    case 'MERCADOTECNIA':
        echo "i es igual a 1";
        break;
} 
?>