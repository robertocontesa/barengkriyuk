<?php
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'barengkriyuk';  
 
  $konek_db = mysql_connect($host, $user, $password); 
  $find_db = mysql_select_db($database) ;

?>