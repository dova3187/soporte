<?php
session_start();
include("conecta.php");

	if (isset($_POST["usuario"],$_POST["password"]))
	     {
	      $var_name=(htmlspecialchars($_POST["usuario"]));
	      $var_pass=(htmlspecialchars($_POST["password"]));
	      	      
		  $sql=mysql_query("SELECT idUsuario,CF_idDepartamento,username,contrasenia FROM usuarios WHERE username='$var_name' and contrasenia=MD5('$var_pass') LIMIT 1",$link);
			      while($row = mysql_fetch_array($sql))
				      {
					       $_SESSION['pkUsager']=$row['idUsuario'];
					       $_SESSION['usager']=$row['username'];
					       $_SESSION['passe']=$row['contrasenia'];
						   $_SESSION['depto']=$row['CF_idDepartamento'];
						   $id=$row['CF_idDepartamento'];
				      }
				  if (mysql_num_rows($sql)==1)
					   {
							//$_SESSION['userid']	= $user['claveUsuario'];
							$_SESSION['username']= $_SESSION['usager'];
							$_SESSION['departamento']=$_SESSION['depto'];
					   }else{header('Location: ../'); $_SESSION['login']=0;}
					   	  
		 			
				switch ($id) 
				{
			    case 1:
			        header('Location: ../sistemas');
			        break;
			    case 2:
			        echo "eres de merca";
			        break;
			    }
  }
 ?>