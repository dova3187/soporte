<?php 
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'test', '1q2w3e')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Conexión Exitosa.<br>';
mysql_query("SET NAMES 'utf8'");
mysql_select_db('grupogamas', $link) or die('No se pudo seleccionar la base de datos');
?>
