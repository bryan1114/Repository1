<?php

require 'connect.inc.php';
		
		


	if(isset($_POST['Ltitle'])&&isset($_POST['Laccession_no'])&&!empty($_POST['Ltitle'])&&!empty($_POST['Laccession_no'])){
		$title = $_POST['Ltitle'] ;
		$accession = $_POST['Laccession_no'];
		$localno = $_POST['Llocal_no'];
		$query = "INSERT INTO `local_gov_prop`  VALUES ( '','".mysqli_real_escape_string($db,$localno)."','".mysqli_real_escape_string($db,$accession)."','".mysqli_real_escape_string($db,$title)."')";
		if($db->query($query)){
			
		}else{
			echo '<script> bootbox.alert("Saving Failed! ");</script>';
		}
	}else{
		echo '<script> bootbox.alert("Title and Accession Number in Local Book panel must not empty!", function(){ window.location="admin_page.php" });</script>';
		
	}



?>