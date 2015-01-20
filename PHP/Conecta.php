<?php 

// Conectando, seleccionando la base de datos
<<<<<<< HEAD
$link = mysql_connect('localhost', 'root', 'root');
     //  or die('No se pudo conectar: ' . mysql_error());
if (!$link) {
   
$link = mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
=======


$server='localhost';
$username='root';
$password='';

$link=mysql_connect($server, $username, $password);
     //or die ('No se pudo conectar: ' . mysql_error());


if(!$link){
    $link=mysql_connect($server, $username, 'root')
   or die('No se pudo conectar: ' . mysql_error());
  
>>>>>>> 8690a0679ea0721ebf4a6678e1b04a3f14d07f0c
}


  
//echo 'Connected successfully';
mysql_select_db('osteochi_nueva') or die('No se pudo seleccionar la base de datos');



?>