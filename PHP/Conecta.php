<?php 

$server='localhost';
$username='root';
$password='';

$link=mysql_connect($server, $username, $password);
     //or die ('No se pudo conectar: ' . mysql_error());


if(!$link){
    $link=mysql_connect($server, $username, 'root');
   
  
}
 
//echo 'Connected successfully';
mysql_select_db('osteochi_nueva') or die('No se pudo seleccionar la base de datos');


?>