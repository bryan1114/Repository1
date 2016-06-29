<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_database = 'library_sys';
$db= new mysqli('localhost','root','','library_sys');


if($db->connect_errno){
	echo $db->connect_error;
	die("Sorry, Under Maintenance");
}else{
	
}
?>