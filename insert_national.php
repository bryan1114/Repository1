<?php

require 'connect.inc.php';



	if(isset($_POST['Nitem_no']) && isset($_POST['Ntitle']) && isset($_POST['Nquantity']) && isset($_POST['Nunit']) &&!empty($_POST['Nitem_no']) &&!empty($_POST['Ntitle']) &&!empty($_POST['Nquantity']) &&!empty($_POST['Nunit'])  ){
			$localno = $_POST['Nlocal_no'];
			$itemno = $_POST['Nitem_no'];
			$title = $_POST['Ntitle'] ;
			$author = $_POST['Nauthor'];
			$accession = $_POST['Naccession_no'];
			$callno = $_POST['Ncall_no'];
			$quantity = $_POST['Nquantity'];
			$unit = $_POST['Nunit'];
			$date_acquired = $_POST['Ndate_acquired'];
			$amount = $_POST['Namount'];
			$query = "INSERT INTO `national` VALUES ( '','".mysqli_real_escape_string($db,$localno)."','".mysqli_real_escape_string($db,$itemno)."','".mysqli_real_escape_string($db,$title)."','".mysqli_real_escape_string($db,$author)."','".mysqli_real_escape_string($db,$accession)."','".mysqli_real_escape_string($db,$callno)."','".mysqli_real_escape_string($db,$quantity)."','".mysqli_real_escape_string($db,$unit)."','".mysqli_real_escape_string($db,$date_acquired)."','".mysqli_real_escape_string($db,$amount)."')";
			if($db->query($query)){
				echo '<script> bootbox.alert("Book added to National Books! ");</script>';
			}else{
				
			}
	}else{
			echo '<script> bootbox.alert("Fill up all the fields in National Book Panel") </script>';
		}


?>