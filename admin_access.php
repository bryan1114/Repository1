<?php



	if(isset($_POST['username'])&&isset($_POST['pass'])){
		$user = $_POST['username'];
		$pass = $_POST['pass'];
		
		if(!empty($user)&&!empty($pass)){
			$query = "SELECT `id` FROM `admin_account` WHERE `username` ='".mysqli_real_escape_string($db,$user)."' AND `password` ='".mysqli_real_escape_string($db,$pass)."'";
			if ($query_run = $db->query($query)){
				if ($count=$query_run->num_rows){
					if($count==0){
						echo'<br /><br /><br />asd';
						echo '<script> bootbox.alert("Invalid Username and Password");</script>';
					}else if($count ==1){
						$row = $query_run->fetch_array(MYSQLI_BOTH);
						$user_id = $row[0];
						$_SESSION['user_id'] = $user_id;
						$link = 'admin.php';
						header('Location: admin_page.php');
					}
				}
			}else{
				echo $db->connect_error;
			}
		}else{
			echo '<script> bootbox.alert("Fill up required fields");</script>';
		}
	}
	
?>

