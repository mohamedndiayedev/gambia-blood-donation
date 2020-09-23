<?php

$DB_host = "sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$DB_user = "jot49h3k6x7o7gqu";
$DB_pass = "qgsasbm7v0sqb5jm";
$DB_name = "ydp4e0iivcsflzco";
	 
	 $MySQLi_CON = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }

?>
