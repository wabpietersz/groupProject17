<?php 
session_start();
 ?>
<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
	<!--//this is for link icons for site-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!--//this is for link bootstrap to site-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row" id="logo">
			<div class="col-md-6" >
				<center>
					<h6 id="HeaderLogo" >NIVAHAN.LK</h6>
				</center>
			</div>

			<div class="col-md-6">
				<center>
					<!--add social media links to site-->
					<i id="SocialMediaTop1" class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop2" class="fa fa-twitter fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop3" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop4" class="fa fa-youtube fa-2x" aria-hidden="true"></i>
				</center>	
			</div>	
		</div>

		<div class="row" id="Header">
			<!--add navgation bar to site-->
			<nav class="navbar navbar-inverse" id="NavBar">
			  <div class="container-fluid" >
			    <div class="navbar-header"> 
			      <a class="navbar-brand" href="index.html" id="NavFontLogo">Nivahan.lk</a>
			    </div>
			    <ul class="nav navbar-nav" >
			      <li><a href="FindAProffesinal.html" id="NavFont">Find Proffesional</a></li>
			      <li><a href="#" id="NavFont">Forum</a></li>
			      <li><a href="Wiki.html" id="NavFont">Wiki</a></li>
			      <li><a href="#" id="NavFont">About Us</a></li>  
			    </ul>
			    <form class="navbar-form navbar-right" id="NavFont">
			      <div class="form-group" id="SearchBarButton">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default" id="SearchBarButton"><i class="fa fa-search " aria-hidden="true"></i></button>
			    </form>
			    
				<ul class="nav navbar-nav navbar-right" id="NavFont">
				<?php 
					if (isset($_SESSION['uname'])){
				?>
						<li><a href="#" id="NavFont"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo($_SESSION['uname']) ?> </a></li>
						<li><a href="logout.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> LogOut</a></li>
				<?php
					}else{
				?>
			      <li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>
			      <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>
			    </ul>
			    <?php 
			    }
			     ?>

			  </div>
			</nav>
		</div>

		<div class="row">
			<div class = "col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active" >
				      <img class="img-rounded" id="ContentImage" src="images/1.jpg" alt="Chania">
				      <div class="carousel-caption">
				        
				      </div>
				    </div>

				    <div class="item">
				      <img class="img-rounded" id="ContentImage" src="images/2.jpg" alt="Chania">
				      <div class="carousel-caption">
				        
				      </div>
				    </div>

				    <div class="item">
				      <img class="img-rounded" id="ContentImage" src="images/3.jpg" alt="Flower">
				      <div class="carousel-caption">
				        
				      </div>
				    </div>

				    

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div> 
		</div>

		<div class="row" id="NewsFeed">
			<div class="col-md-12">
				<h1 id ="NewsFeedHeading">Latest Upadtes</h1>
				<div class = "col-md-4" id="NewsFeedImages">
					<img  src = "images/4.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
					<h1>Latest house designs</h1>
	            	<h3>WEB PAGES</h3>
	            	<hr/>
	            	<p>aaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaa</p>
	            	<a href="#">more</a>
				</div>

				<div class = "col-md-4" id="NewsFeedImages">
					<img  src = "images/5.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
					<h1>Architectures</h1>
	            	<h3>WRITING</h3>
	            	<hr/>
	            	<p>bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbb bbbbbbbbb</p>
	            	<a href="#">more</a> 
				</div>

				<div class = "col-md-4" id="NewsFeedImages">
					<img src = "images/6.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
					<h1>Latest interior designs</h1>
	            	<h3>PAINTING</h3>
	            	<hr/>
	            	<p>cccccccccccccc ccccccccccccccccccccc cccccccccccccccccc ccccccccccccccccccccc  cccccccccccccc ccccccccccccc</p>
	            	<a href="#">more</a>
				</div> 
			</div>
		</div>

		<div class="row" id="Footer">
				<div class = "col-md-3 col-xs-6">
					<h2>latest designs</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>profiles</h2>
					<ul>
    				<li>Augest 2010</li>   					
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>house categories</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				<li>design</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>Contact US</h2>
					<ul>
    				<li>MOBILE</li>   					
    				<li>EMAIL</li>
   					<li>OFFICE</li>
    				</ul>

				</div>
		</div>

	</div>	
</body>

</html>