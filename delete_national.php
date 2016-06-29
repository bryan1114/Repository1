<?php
include 'connect.inc.php';

$query = "DELETE FROM national WHERE id ='".$_POST["id"]."'";

if($db->query($query)){
	echo '<script> bootbox.alert("Deleted Successfully");</script>';
}else{
	echo $db->connect_error;
}
?>