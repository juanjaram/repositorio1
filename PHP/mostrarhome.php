<?php


$sqlnoticias=  mysql_query("SELECT * FROM `noticias` ORDER BY `noticias`.`fecha_not` DESC  limit 1 ");

$sqlvideo= mysql_query("SELECT * FROM `videos` ");




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

