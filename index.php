<?php
session_start();
session_destroy();
include './config/conecta.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GRUPOGAMAS | login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="./assets/ico/favicon.png">
    <!-- Le styles -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./assets/css/estiloGeneral.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; 
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

	  .login-form {
		margin-left: 65px;
	  }
	  
	  img{
	  	margin-left:50px;
	  	margin-bottom:20px;
	  	}
	  legend {
		margin-right: -50px;
		font-weight: bold;
	  	color: #404040;
	  }

    </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <img src="./assets/img/gamas.png" alt="ezer" width="220" style="margin-left:0px;"/>
          <form action="./config/login.php" method="post" >
            <fieldset>
              <div class="clearfix">
                <input type="text" name="usuario" placeholder="usuario" required>
              </div>
              <div class="clearfix">
                <input type="password" name="password" placeholder="password" required>
              </div>
              <?php 
              if(isset($_SESSION['login'])){  if($_SESSION['login']==0)
              {
              	echo "<div class=\"alert alert-error\">
  					Datos Incorrectos
					</div>";}  }
              ?>
		        <div class="form-act">
		            <button type="submit" name="boton" class="btn btn-primary">Iniciar Sesión</button>
		            <button class="btn">   Cancelar   </button>			            
		        </div>

            </fieldset>
          </form>      
          
          
        </div>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>