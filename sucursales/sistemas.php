<?php
session_start();
include '../config/conecta.php';
date_default_timezone_set( "America/Mexico_City" ); 

$idSucursal=$_SESSION['departamento'];
$sql=mysql_query("SELECT nombreDepartamento
					FROM departamentos 
					WHERE idDepartamento='$idSucursal' ",$link);
$departamento=mysql_result($sql,0);
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
                            <li class="active"><a href="sistemas.php">SISTEMAS</a></li>
                            <li><a href="estado.php">REPORTES</a></li>                          
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
<form class="well-small" action="../correos.php" method="post">
  <label>Sucursal  </label>
  <input type="text" value="<?php echo (strtoupper($departamento) )?>" class="span3"  readonly name="sucursal"/>
  <label>Nombre del solicitante</label>
  <input name="nombresolicitante" type="text" class="span3"id="fecha" placeholder="Escriba su nombre completo" size="60" maxlength="60" required=""> 
  <label>Fecha</label>
  <input name="fecha" type="text" value="<?php echo date("Y-m-d");?> " class="span3" id="fecha" size="10" maxlength="10" readonly>
  <label>Hora</label>
  <input name="hora" type="text" value="<?php echo date("H:i:s"); ?>" class="span3" id="hora" value="" size="5" readonly>
  <label>Tipo de soporte</label>
	 <Select  class = "selectpicker" name="tipoSoporte" required>
      <option value> Seleccione </ option>
      <option value="CIERRE DE TURNO">  Cierre de turno </ option>
      <option value="HARDWARE"> Hardware </ option>
      <option value="SOFTWARE"> Software </ option>
      <option value="PAGINA WEB"> Pagina Web </ option>
      <option value="MANTENIMIENTO PREVENTIVO"> Mantenimiento Preventivo </ option>
      <option value="REPARACION DE EQUIPO"> Reparación de Equipo </ option>
      <option value="REMODELACION/INSTALACION"> Remodelación e Instalación </ option>
  </Select>
  <label>Nivel de urgencia</label>
  <Select  class = "selectpicker" name="nivelUrgencia" required>
      <option value> Seleccione </ option>
      <option> Regular </option>
      <option> Medio </option>
      <option> Urgente </option>
      </Select>
      <label>Descripción del fallo</label>
      <textarea name="descripcionFallo" rows="4" class="span5" required></textarea>
      <input type="hidden" value="SISTEMAS" name="soporte" />
      <input type="hidden"  name="user" value="<?php echo (strtoupper($_SESSION['username']))?>" readonly>
<div class="clearfix">
<input class="btn" type="submit"value="Enviar solicitud"/ >
</form>
</div>
</div>
<div id="footer">Copyright © DETEI</div>
</body>
</html>