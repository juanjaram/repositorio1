<?php 

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', 'root');
     //  or die('No se pudo conectar: ' . mysql_error());
if (!$link) {
   
$link = mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
}
  
///echo 'Connected successfully';
mysql_select_db('osteochi_nueva') or die('No se pudo seleccionar la base de datos');



?>