<?php
	
	require 'connect.inc.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<div><h1 class="whitep"><br />Welcome Researcher!</h1></div>
	
	<div class="row"  > 
		<div style="margin-left:40px;" class="col-xs-5 col-md-push-2">
			
			<!-- Carousel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
			  <!-- Indicators -->
			  
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			  
			  <div class="carousel-inner" role="listbox" style="padding:0px;">
			  
				<div class="item active">
				  <img class="first-slide" src="img/img3.jpg" alt="First slide">
				  <div class="container">
					<div class="carousel-caption" style="color:white;">
					  <h1>Tanauan City Library Center</h1>
					  <h1>Tanauan City Batangas	</h1>
					  <p></p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <img class="second-slide" src="img/img1.jpg" alt="Second slide">
				  <div class="container">
					<div class="carousel-caption" style="color:white;">
					  <h1>Located at Tanauan City Batangas</h1>
					</div>
				  </div>
				</div>
				<div class="item">
				  <img class="third-slide" src="img/img2.jpg" alt="Third slide">
				  <div class="container">
				  
					<div class="carousel-caption">
					  <h1>You may find books here.</h1>
					  <p>There many books to be borrowed in this library.</p>
					  <p><a class="btn btn-lg btn-primary" href="#" role="button">Search Books</a></p>
					</div>
					
				  </div>
				</div>
				
			  </div>
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div><!-- /.carousel -->
		</div><!-- End of Carousel -->
	</div>

</body>
</html>