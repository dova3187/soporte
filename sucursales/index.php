<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inicio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-responsive.css">
        <link rel="stylesheet" href="../css/estilomenu.css">
        <link rel="stylesheet" href="../css/main.css">
        <style>  
</style>
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
                            <li class="active"><a href="index.php"><i class="icon-home icon-white"></i>INICIO</a></li>
                            <li><a href="modificarperfil.php">MODIFICAR PERFIL</a></li>
                            <li><a href="">PREGUNTAS FRECUENTES</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                        </ul>
                    <form class="navbar-search pull-right" action="">
          			<input type="text" class="span3" value="BIENVENIDO: <?php echo (strtoupper($_SESSION['username'])) ?>" disabled>
        			</form>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-->
            </div><!--/.nav inner-->
        </div>
<div class="container-fuid">
	
	<input type="text" name="usuario" value="<?php echo $_SESSION['username'] ?>"
<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
<!-- Carousel items -->
      <div align="center">
        <div class="logo"><img  src="../img/gamas.png" alt="logo">
        	<?php include '../noticias.php'?>
       </div>
       </div>
</div>
            <!-- Example row of columns -->
            <hr>
        <div class="row">	
                <div class="span4">
                    <a href="sistemas.php"><h3>SISTEMAS</h3></a>
                </div>
                <div class="span4">
                 	<a href="ifal.php"><h3>IFAL</h3></a>
               </div>
               <div class="span4">               
                   <a href="mantenimiento.php"><font color:"black"><h3>MANTENIMIENTO</h3></font></a>
               </div>
               <div class="span4">                
                    <a href="mercadotecnia.php"><h3>GERENCIA DE SERVICIOS</h3></a>
               </div>            
         </div>                
         		<hr>
</div> <!-- /container -->
<div id="footer">Copyright © DETEI</div>        
</body>
</html>
