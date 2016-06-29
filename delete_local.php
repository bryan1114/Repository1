<?php
include 'connect.inc.php';

$query = "DELETE FROM local_gov_prop WHERE id ='".$_POST["id"]."'";

if($db->query($query)){
	echo '<script> bootbox.alert("Deleted Successfully");</script>';
}else{
	echo 'bootbox.alert(" Delete FAiled");';
}	
?>

