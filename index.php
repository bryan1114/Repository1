<?php
require 'connect.inc.php';
require 'core.inc.php';
include 'sidebar.php';
include 'home_content.php';

if(loggedin()){
	 $link = 'Capstone/admin_page.php';
	 
}else {
	 $link = '#popup';
}


?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="shortcut icon" href="logo.jpg" />		<link rel="stylesheet" href="css/bootstrap.css" />	<link rel="stylesheet" href="css/bootstrap.min.css" />

	 <link rel="stylesheet" href="css/carousel.css" /> 
	 <link rel="stylesheet" href="css/custom.css" /> 
	 
	 <link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/jquery-ui.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.structure.css" />
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.theme.css" />
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />       <script src="js/bootstrap.min.js"></script>	<script src="js/jquery-1.10.2.min.js" ></script>
	<script src="js/bootstrap.js" ></script>
	<script src="js/bootbox.min.js" ></script>
	<script type="text/javascript" src="js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	
</head>

<body background="bg.jpg" style="" >	
<div> 	<!-- Navigation bar -->

	<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a href="index.php" class="navbar-brand scroll-link" data-id="carousel1">TANAUAN CITY LIBRARY CENTER</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse pull-right" role="navigation">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="scroll-link" data-id="signup">Home</a></li>
						<li><a href="#" class="scroll-link" data-id="whatwedo">Information</a></li>
						<li><a href="#" class="scroll-link" data-id="application">Search Books</a></li>
						<li><a href="/<?php echo $link; ?>" data-toggle="modal" >Admin Access</a></li>
					   
					</ul>
				</nav>
			</div>	
       
    </header>
			
</div> <!-- Navigation bar-->


<?php  require'admin_access.php'; ?>
<div class="modal fade" id="popup"> <!-- ADMIN LOGIN -->
			<div class="modal-dialog">
				<div class="modal-content">
					<!--header-->
					<div class="modal-header">
						<button type="Button" class="close" data-dismiss="modal" >&times;</button>
						<div class="container">
							<h2 class="modal-title" align="center"> <img align="left" class="img-rounded" src="logo.jpg" width="45px;" alt="" />  Login</h2>
						</div>
					</div>
					
					<!--body-->
					<div class="modal-header">
						<form action="<?php echo $current_file; ?>" method="POST">
							<!-- user name-->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="UserName" name="username"/>
							</div>
							<!-- password -->
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="pass" />
							</div>
							
							<!--button-->
							<div class="modal-header">
								<input type="submit" value="Log in" class="btn btn-primary btn-block" />
							</div>
						</form>
					</div>
					
					
					
				</div>
			</div>
		</div> <!-- ADMIN LOGIN -->		
			
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/ui.js"></script>
	<script type="text/javascript" src="js/datatable.js"></script>
</body>
</html>