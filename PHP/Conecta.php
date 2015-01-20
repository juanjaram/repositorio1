<?php 

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', 'root') or mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('osteochi_nueva') or die('No se pudo seleccionar la base de datos');




/*
function conectame($servidor,$usuario,$clave,$bd)
{
	$con=mysql_connect($servidor,$usuario,$clave)
	or die ("Problemas al conectar al server");
	mysql_select_db($bd, $con)
	or die("Problemas al conectar a la base de datos");
}	
function consulta($query)
{
	$rs=mysql_query($query);
	return $rs;
}

conectame("localhost","root","","osteochile");     
*/
?>