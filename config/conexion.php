<?
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "soporte"; //El usuario que acabamos de crear en la base de datos
$contrasenha = "1q2w3easd"; //La contraseña del usuario que utilizaremos
$db = "grupogamas"; //El nombre de la base de datos
 
$conexion = mysql_connect($servidor, $usuario, $contrasenha);
 
if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{

echo 'CONEXION';

}

mysql_query("SET NAMES 'utf8'");

mysql_select_db($db, $conexion) or die(mysql_error($conexion));
?>