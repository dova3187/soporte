<?php
include("../config/conecta.php");
echo "<div class=\"noticias\">";
	
	$sql=mysql_query("SELECT descripcion,fecha
					FROM noticias
					WHERE status='ACTIVO' ",$link);
			
	while($row = mysql_fetch_array($sql))
	{
		echo "</br>";
		echo $row['descripcion'];
	}
echo "</div>";

?>