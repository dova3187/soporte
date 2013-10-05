<?php
	date_default_timezone_set( "America/Mexico_City" ); 
	$año=date('Y');
	$mes=date('m');
	$dia=date('d');
	
	switch ($mes) {
		case '1':
			$elmes="Enero";
			break;
		case '2':
			$elmes="Febrero";
			break;
		case '3':
			$elmes="Marzo";
			break;
		case '4':
			$elmes="Abril";
			break;
		case '5':
			$elmes="Mayo";
			break;
		case '6':
			$elmes="Junio";
			break;
		case '7':
			$elmes="Julio";
			break;
		case '8':
			$elmes="Agosto";
			break;
		case '9':
			$elmes="Septiembre";
			break;
		case '10':
			$elmes="Octubre";
			break;
		case '11':
			$elmes="Noviembre";
			break;
		case '12':
			$elmes="Diciembre";
			break;
	}
?>