<?php

require'admin_access.php';
require 'core.inc.php';
require 'connect.inc.php';







if(!isset($_SESSION['user_id']) && empty ($_SESSION['user_id'])){
header('Location: index.php');
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.css" />
	
	<link rel="stylesheet" href="css/custom.css" />
	
	
    <link rel="stylesheet" href="css/glyphicons-halflings-regular.eot" />
    <link rel="stylesheet" href="css/glyphicons-halflings-regular.svg" />
    <link rel="stylesheet" href="css/glyphicons-halflings-regular.ttf" />
    <link rel="stylesheet" href="css/glyphicons-halflings-regular.woff" />
    <link rel="stylesheet" href="css/glyphicons-halflings-regular.woff2" />
	
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/jquery-ui.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.structure.css" />
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css" />
	<link rel="stylesheet" href="css/jquery-ui.theme.css" />
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
	
	<script src="js/jquery-1.10.2.min.js" ></script>
	<script src="js/bootstrap.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/bootbox.min.js" ></script>
	<script src="js/npm.js" ></script>

	<script type="text/javascript" src="js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
		

</head>
<body background ="bg.jpg" style="">
	<div class="container col-xs-12" align="left">
		<h1 style="width:264px;" class="whitep"><?php echo 'Welcome '.getuser('firstname').'!'; ?> </h1>
		<div ><a  href="destroy_session.php" ><input class="btn btn" type="button" value="Logout"/></a></div>
	</div>
	
	
	<!-- <div class="modal fade" id="pops">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="Button" class="close" data-dismiss="modal" >&times;</button>
						<h4 class="modal-title" >Book Added to Local Books!</h4>
				</div>
				
				<div class="modal-header">
					<h3 class="text-warning text-center "> Title and Accession Number must not empty</h3>
				</div>
			</div>
		</div>
	</div> -->
	
	
	<div class="container col-md-12">
		<div   id="tabs"   style=" position:relative; top:3px;  background-color:#585d5f; ">
			<ul >
				<li><a href="#LB">Local Books</a></li>
				<li><a href="#NB">National Books</a></li>
				<li><a href="#BB">Report of Books</a></li>
			</ul>
			
				
				<div id="LB" >
					<div class="container">
						<div class="row">
							<!-- Local Book Panel-->
							<header>
								<h4 class="whitep headtitle">Insert Panel</h4>
							</header>
							
								<div class="col-xs-8">
									<div class="panel panel-primary" style="" id="local">
									<button type="Button" class="close " id="local_close" ><span aria-hidden="true">&times;</span></button>
										<div class="panel-heading panel-fluid"><h3 class="panel-title" > Insert Local Book Record </h3></div>
										<div class="panel-body">
											<form  method="POST" id="local_form">
												<div class="">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>Local Number</th>
																	<th><input type="text" class="form-control" placeholder="Enter Local Number" id="Llocal_no" name="Llocal_no"/></th>
																</tr>
																<tr>
																	<th>Accession Number</th>
																	<th><input type="text" class="form-control" placeholder="Enter Accession Number" name="Laccession_no" id="Laccession_no"/></th>
																</tr>
																<tr>
																	<th>Title of Book</th>
																	<th><input type="text" class="form-control" placeholder="Enter Title" name="Ltitle" id="Ltitle" /></th>
																</tr>
															</thead>		
														</table>
														<div>
															<input class="btn btn-success btn-block" type="button" value="Insert" id="local_submit"  />
														</div>
													</div>	
												</div>		
											</form>	
										</div>	
									</div>
								</div>
								
								<div class="container">
									<header align="center">
										<h4 class=" whitep">  </h4>
									</header>
									<div class="col-xs-3 col-xs-push-1">
										<div class="panel panel-success">
											<div class="panel-heading panel-fluid"><h3 class="panel-title">Books in use</h3></div>
												<div class="panel-body" style="overflow:auto;">
													<div id="borrow_data"></div>
												</div>
												
										</div>
									</div>	
								</div>
								
						</div>

						<div class="row">
							<header>
								<h4 align="left" style="width:150px;" class="whitep headtitle">Update Panel</h4>
							</header>
									
							<div class="col-xs-8">
								<div class="panel panel-primary">
									<div id="update" class="panel-heading"><h3 class="panel-title" align="center">Update</h3></div>
										<div class="panel-body"  style="height:500px; overflow:auto;">
											<div id="live_data" ></div>
										</div>
								</div>
							</div>
							
							<div class="container">
							<div class="col-xs-3 col-xs-push-1">
										<div class="panel panel-success">
											<div class="panel-heading panel-fluid"><h3 class="panel-title">Access Borrowed Books</h3></div>
												<div class="panel-body">
													
													
													<div class="col-md-12">
														<h4>Book</h4><input style="margin-bottom:5px;" type="input" class="form-control" placeholder="Enter Title" id="title" name="title"/>
														<h4>Name of Borrower</h4><input style="margin-bottom:5px;" type="input" class="form-control" placeholder="Enter Borrower Name" id="borrower" name="borrower"/>
														<h4>Accession Number</h4><input style="margin-bottom:5px;" type="input" class="form-control" placeholder="Enter Acession Number" id="accession" name="accession"/>
														<h4>Date Borrowed</h4><input style="margin-bottom:5px;" type="date" class="form-control"  id="date_borrowed" name="date_borrowed"/>
														<input class="btn btn-success btn-block" type="button" value="Save" id="borrow_submit"  />
													</div>
												
												</div>
												
										</div>
									</div>	
						</div>
						</div>
					</div>
				</div>
				
				<div id="NB">
					<div class="container">
						<!-- National Book Panel -->
						<header>
								<h4 class="whitep headtitle">Insert Panel</h4>
							</header>
						<div class="col-xs-12" >
							<div class="panel panel-primary " style="" id="national">
								<button type="Button" class="close " id="national_close" ><span aria-hidden="true">&times;</span></button>
									<div class="panel-heading"><h3 class="panel-title"> Insert National Book Record</h3></div>
										<div class="panel-body">
											<form  method="POST" id="national_form">
												<div class="container-fluid">
													<div class="table-responsive" style="height:177.9px; overflow:auto;">
														<table class="table" >
															<tr>
																<th>Local Number</th>
																<th><input type="text" class="form-control" placeholder="Enter Local Number" id="Nlocal_no" name="Nlocal_no"/></th>
																<th>Item Number</th>
																<th><input type="text" class="form-control" placeholder="Enter Item Number" id="Nitem_no" name="Nitem_no"/></th>
															</tr>
																<tr>
																<th>Title</th>
																<th><input type="text" class="form-control" placeholder="Enter Title" id="Ntitle" name="Ntitle"/></th>
																<th>Author</th>
																<th><input type="text" class="form-control" placeholder="Enter Author" id="Nauthor" name="Nauthor"/></th>
															</tr>
															<tr>
																<th>Accesion Number</th>
																<th><input type="text" class="form-control" placeholder="Enter Accession Number" id="Naccession_no" name="Naccession_no"/></th>
																<th>Call Number</th>
																<th><input type="text" class="form-control" placeholder="Enter Call Number" id="Ncall_no" name="Ncall_no"/></th>
															</tr>
															<tr>
																<th>Quantity</th>
																<th><input type="text" class="form-control" placeholder="Enter Quantity Number" id="Nquantity" name="Nquantity"/></th>
																<th>Unit</th>
																<th><input type="text" class="form-control" placeholder="Enter Unit" id="Nunit" name="Nunit"/></th>
															</tr>
															<tr>
																<th>Date Acquired</th>
																<th><input type="date" class="form-control" placeholder="Enter Date Acquired" id="Ndate_acquired" name="Ndate_acquired"/></th>
																<th>Amount</th>
																<th><input type="text" class="form-control" placeholder="Enter Amount" id="Namount" name="Namount"/></th>
															</tr>
														</table>
													</div>
												</div>	
														<div>
															<input class="btn btn-success btn-block" type="button" value="Insert" id="national_submit" name="national_submit"  />
														</div>
											</form>	
									</div>	
															

							</div>
						</div>
					</div>
					
						<div class="container">
							<header>
								<h4 align="left" style="width:150px;" class="whitep headtitle">Update Panel</h4>
							</header>
							<div class="col-xs-12">
								<div class="panel panel-primary">
									<div id="update" class="panel-heading"><h3 class="panel-title" align="center">Update</h3></div>
										<div class="panel-body"  style="height:500px; overflow:auto;">
											<div id="national_data" ></div>
										</div>
								</div>
							</div>
						</div>
					
				</div>
				
				<div id="BB">
					<p>Borrowed Book</p>
					<img class="img-rounded img-fluid" src="img/local_gov.png" alt="" id="img_local" width="530" height="175"  />
					<img class="img-rounded img-fluid" src="img/local_gov.png" alt="" id="img_local" width="530" height="175"  />
				
					
				</div>
		</div>
	</div>
	

	
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/ui.js"></script>
	<script type="text/javascript" src="js/datatable.js"></script>
</body>
</html>