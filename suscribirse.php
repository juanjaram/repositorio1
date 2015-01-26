<?php

 include("PHP/conecta.php");


$correo=$_POST["email"];


$programas="SELECT MAX( email ) AS correos FROM correos";
$pprogramas=mysql_query($programas);
$contador=mysql_fetch_array($pprogramas);
$conteo=$contador['correos'] + 1;


function verificaremail($email){ 
  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
      return FALSE; 
  } else { 
       return TRUE; 
  } 
}



if (verificaremail($correo)) {
$consulta=" INSERT INTO `correos` (`email`) VALUES('".$correo."','".$fecha."')";
mysql_query($consulta);



echo "GRACIAS POR SUSCRIBIRSE CON NOSOTROS ";

}else{ 
        echo "SU DIRRECION DE CORREO NO ES VALIDA"; 

 


?>