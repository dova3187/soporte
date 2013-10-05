<?php
session_start();
include '../config/conecta.php';
date_default_timezone_set( "America/Mexico_City" ); 

$idSucursal=$_SESSION['departamento'];
$sql=mysql_query("SELECT nombreDepartamento
					FROM departamentos 
					WHERE idDepartamento='$idSucursal' ",$link);
$departamento=mysql_result($sql,0);

$solicitudes=mysql_query("SELECT solicitudes.solicitante AS  'SOLICITANTE', 
									solicitudes.fechas AS  'FECHA', 
									solicitudes.solicitud AS  'SOLICITUD', 
									sistemasasignacion.estadoReporte AS  'ESTADO',
									sistemasasignacion.idSistemas as 'ID'
						  FROM solicitudes
									RIGHT JOIN sistemasasignacion ON solicitudes.idSolicitud = sistemasasignacion.CF_idSolicitud
										
							LIMIT 0 , 10 ",$link);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>	SISTEMAS | SOLICITUD SOPORTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <style type="text/css">
     </style>
   	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/estilosistemas.css" rel="stylesheet">
</head>
<body>
     <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav nav-tabs">
                            <li><a href="menusuc.php"><i class="icon-home icon-white"></i>INICIO</a></li>
                            <li><a href="sistemas.php">SISTEMAS</a></li>
                            <li class="active"><a href="estado.php">REPORTES</a></li>                          
                        </ul>
                    <form class="navbar-search pull-right" action="">
          			<input type="text" class="span3" value="BIENVENIDO: <?php echo (strtoupper($_SESSION['username']))?>" disabled>

        			</form>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-->
            </div><!--/.nav inner-->
        </div>
<div class="container-fluid">
<div class="hero-unit">
	<legend><center>SOLICITUDES ENVIADAS DESDE ESTA CUENTA</center> </legend>
<?php
echo "<table class=\"table table-striped\">";
echo "<tr> <td>ID</td>		<td>Solicitante</td>	<td>Descripcion</td> 		<td>Fecha</td>	<td>Estado</td></tr>";
while($row = mysql_fetch_array($solicitudes))
			{
				echo "<tr>";
 				echo "<td>".$row ['ID']."</td>";
 				echo "<td>".$row ['SOLICITANTE']."</td>";
				echo "<td>".$row ['SOLICITUD']."</td>";
				echo "<td>".$row ['FECHA']."</td>";
				echo "<td>".$row ['ESTADO']."</td>";
				echo "</tr>";
			} 
echo "</table>";	
?>

<br>
<legend><center>CERRAR REPORTES</center> </legend>
</div>
</div>
<div id="footer">Copyright © DETEI</div>
</body>
</html>