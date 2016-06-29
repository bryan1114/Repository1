<?php
include 'connect.inc.php';

if(isset($_POST['id'])&&isset($_POST['text'])&&isset($_POST['column_name'])){
$id = $_POST["id"];
$text=$_POST["text"];
$column_name = $_POST["column_name"];
$query = "UPDATE `local_gov_prop` SET `".$column_name."` = '".$text."' WHERE `id` = ".$id."";
	if($db->query($query)){
		echo 'Updated Successfully';
	}else{
		echo 'Update FAiled';
	}
}	
?>