<?php

require 'connect.inc.php';
		
		


	if(isset($_POST['title'])&&isset($_POST['borrower'])&&isset($_POST['accession'])&&isset($_POST['date_borrowed'])&&!empty($_POST['title'])&&!empty($_POST['borrower'])&&!empty($_POST['accession'])&&!empty($_POST['date_borrowed'])){
		$title = $_POST['title'] ;
		$borrower = $_POST['borrower'];
		$accession = $_POST['accession'];
		$date_borrowed = $_POST['date_borrowed'];
		$query = "INSERT INTO `book_report`  VALUES ( '','".mysqli_real_escape_string($db,$title)."','".mysqli_real_escape_string($db,$borrower)."','".mysqli_real_escape_string($db,$accession)."','".mysqli_real_escape_string($db,$date_borrowed)."','')";
		if($db->query($query)){
			$db->query("INSERT INTO `borrow_book` VALUES ('','".mysqli_real_escape_string($db,$title)."','".mysqli_real_escape_string($db,$borrower)."')");
		}else{
			echo '<script> bootbox.alert("Saving Failed! ");</script>';
		}
	}else{
		//echo '<script> bootbox.alert("Title and Accession Number in Local Book panel must not empty!", function(){ window.location="admin_page.php" });</script>';
		
	}

?>