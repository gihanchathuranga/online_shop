
<!DOCTYPE html>
<html lang="en">
<!-- min-height: 55px;
  	padding: 0 15px 15px; 

  	.navbar-brand{
  	float: left;
  	
  	min-height: 55px;
  	padding: 0 15px 15px;
  	
  }-->
<head>
  <title>Electricks Electronic parts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  h1.header1{
  		color: #660000;
  }
  body{

  	font-family: Verdana, Geneva, sans-serif;
	}
  .navbar {
  		margin-bottom: 0;
  		border-radius: 0;
  		background-color: #660000;
  		color: #FFF;
  		padding: 1% 0%;
  		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  		font-size: 1.3em;
  		border: 0;
  }
  .left{

  	float: left;
  }
 
  
  .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover{
  	color: #FFF;
  	background-color: #660000;
  	



  }
  

  .navbar-inverse .navbar-nav li a{

  	color: #D5D5D5;
  }
  .carousel-caption{
  	top: 50%;
  	transform: translateY(-50%);
  	text-transform: uppercase;
  }
  .btn{
  	font-size: 18px;
  	color: #FFF;
  	padding: 12px 22px;
  	background-color: orange;
  	border: 2px solid #FFF; 
  }
  .container{
  	margin: 4% auto;
  }
  #icon{
  	max-width: 200px;
  	margin: 1% auto;
  }
  footer{
  	width: 100%;
  	background-color: orange;
  	padding: 5%;
  	color: #FFF;
  }
  .fa{
  	padding: 15px;
  	font-size: 25px;
  	color: #FFF;
  }
  .fa:hover{
  	color: #D5D5D5;
  	text-decoration: none;

  }
  .fa-facebook{
  	color: #365899;
  }
  .fa-twitter{

  	color: #1da1f2
  }
 


  

  @media (max-width: 900px){
   .fa{
   		font-size: 20px;
   		padding: 10px;
   }
  }


  @media (max-width: 600px){
  	.carousel-caption{
  		display: none;
  	}
  	#icon{
  		max-width: 150px;
  	}
  	h4{
  		font-size: 1.7em;
  	}

  }


  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="MyNavbar">
				<a class="left" href="index.html"><img src="img/logo.png"></a>
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.html">Home</a></li>
						<li class="active"><a href="manage.php">Management</a></li>
						<li class="active"><a href="product.php">Products</a></li>
						<li class="active"><a href="../../../Electricks-shop/index.php">Buy Here!</a></li>
						<li class="active"><a href="contact.php">Contact Us</a></li>
					</ul>			
			</div>

		</div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/mountains.png">
				<div class="carousel-caption">
					
					<br>
				</div>

			</div>

			 <!--End Active-->
			<div class="item">
				<img src="img/snow.png">
				<div class="carousel-caption">
					
					<br>
				</div>
			</div>	
			<div class="item">
				<img src="img/red.png">
				<div class="carousel-caption">
					
					<br>
				</div>
			</div>	
		</div>	
		 <!--start slider controls -->

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!--end slider -->

	<div class="container text-center">
		
			
		
		<div class="row">
			<div class="col-sm-12">
			<img src="img/logofinal.png">
			</div>

			<div class="col-sm-12">
				<h1 class="header1">Electricks</h1>
				<h1>Overview of the Company</h1>		
				<h3>The name of our sister company of SERVES is ELECTRICKS. We come up in name of our sister company because SERVES offer services and solution to the problem of the client in their computer and ELECTRICKS offer product needed by the client to make a project or needed parts to repair their product. The company goals to become the best seller of electronics components and materials. The mission of company is to provide a quality and affordable product to fulfill the needs of customers. The vision is to give the quality and high standard product to satisfy the needs of the customers. </h3>
			</div>

			<div class="col-sm-4">
				<img src="img/bootstrap.png" id="icon">
				<h4>Boostrap</h4>
			</div>

			<div class="col-sm-4">
			<img src="img/css3.png" id="icon">
				<h4>Css3</h4>
			</div>
			
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>qweqweqweqw</h4>
				<p>qweqweqweqw</p>
				<p>weqweqweqweq</p>
			</div>
			<div class="col-md-6">
				<img src="img/bootstrap2.jpg" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>gergerger</h4>
					<p>ergergergergeerger</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="img/sass.png" class="img-responsive">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>gdfgdfgdfg</h4>
					<p>dfgdfgdfgdf</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="img/less.png" class="img-responsive">
				</div>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<h4><a href="#hidden" data-toggle="collapse">Care to learn Boostrap?</a></h4>
			<div id="hidden" class="collapse">
				<h4>qweqweqweqw</h4>
				<p>qweqweqweqw</p>
				<p>weqweqweqweq</p>
			</div>
		</div>
	</div>
	<!--footer-->

	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3> Develop By </h3>
				<br>
				<h4>Team ABC</h4>
			</div>
			<div class="col-sm-4">
				<h3>Connect</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-youtube"></a>
			</div>
			<div class="col-sm-4">
				<img src="img/ironman2.png" class="icon">
			</div>

		</div>
	</footer>


</body>
</html>