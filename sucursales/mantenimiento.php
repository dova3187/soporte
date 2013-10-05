<?
session_start();
echo $_SESSION['user'];
date_default_timezone_set("America/Mexico_City");
echo date('l jS  F Y h:i:s A');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO| SISTEMAS</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width">
     <style type="text/css">
     </style>
   	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/estilosistemas.css" rel="stylesheet">
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
                            <li class="active"><a href="mantenimiento.php">MANTENIMIENTO</a></li>
                            <li><a href="reportesmantenimiento.php">REPORTES</a></li>                          
                        </ul>
                    <form class="navbar-search pull-right" action="">
          			<input type="text" class="span3" value="BIENVENIDO: <?php echo $_SESSION['user'] ?>" disabled>
        			</form>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-->
            </div><!--/.nav inner-->
        </div>
<div class="container-fluid">
<div class="hero-unit">
<form class="well-small" action="correosenviados.php" method="post">
  <label>Sucursal  </label>
  <input type="text" value="<?php echo $_SESSION['user'] ?>" class="span3" disabled/>
  <label>Nombre del solicitante</label>
  <input name="nombresolicitante" type="text" class="span3"id="fecha" placeholder="Escriba su nombre completo" size="60" maxlength="60"> 
  <label>Fecha</label>
  <input name="fecha" type="text" value="<?php echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ; ?> " class="span3" id="fecha" size="10" maxlength="10" disabled>
  <label>Hora</label>
  <input name="hora" type="text" value="<?php echo date('h:i:s A'); ?>" class="span3" id="hora" value="" size="5" disabled>
  <label>Tipo de soporte</label>
	 <Select  clase = "selectpicker"  múltiples >
      <option selected="selected"> Seleccione </ option>
      <option> Cierre de turno </ option>
      <option> Hardware </ option>
      <option> Software </ option>
      <option> Pagina Web </ option>
      <option> Mantenimiento Preventivo </ option>
      <option> Reparación de Equipo </ option>
      <option> Hardware </ option>
      <option> Mantenimiento Correctivo </ option>
      <option> Remodelación e Instalación </ option>
  </Select>
  <label>Nivel de urgencia</label>
  <Select  clase = "selectpicker"  múltiples >
      <option selected="selected"> Seleccione </ option>
      <option> Regular </option>
      <option> Medio </option>
      <option> Urgente </option>
      </Select>
      <label>Descripción del fallo</label>
      <textarea name="folio2" rows="4" class="span5" id="folio2"></textarea>
<div class="clearfix">
<input class="btn" type="submit"
value="Enviar solicitud"/ 
<input name="button2" type="button" onclick='alert("Tu solicitud ha sido enviada.")'/></div>
</form>
</div>
</div>
<div id="footer">Copyright © DETEI</div>
</body>
</html>