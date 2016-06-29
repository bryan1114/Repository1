<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];


if (isset($_SERVER['HTTP_REFERER']) && !empty ($_SERVER['HTTP_REFERER'])) {
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin() {
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		return true;
	}else {
		return false;
	}
}

function getuser($field){
	$db= new mysqli('localhost','root','','library_sys');
	$query_result = $db->query("SELECT `".$field."` FROM `admin_account` WHERE `id`='".$_SESSION['user_id']."'");
	
		if($query_result ->num_rows) {
			$row = $query_result->fetch_array(MYSQLI_BOTH);
			$result = $row[0];
			return $result;
		}else{
			die(mysql_error());
		}
}
?>