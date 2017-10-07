

<html lang="en-us">
<head>
	<title>Preperty Management pvt ltd</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/bootstrap.css">
	<link href="<?php echo base_url(); ?>resources/css/bootstyle.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap-carousel.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="navbar navbar-fixed-top">	
				<div class="navbar-inner">
					<div class="container">			
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>			
						<a class="brand" href="home.php">Properties</a>				
						<div class="nav-collapse collapse navigation-top pull-right">
							<ul class="nav">
								<li><a href="">Home</a></li>
								<li><a href="">Lands</a></li>
								<li><a href="">Buildings</a></li>
								<li><a href="">Houses</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Contact</a></li>
								<li><a href="">Sign in</a></li>
								<li><a href="">Sign up</a></li>
							</ul>
						</div>				
					</div>
				</div>
			</div><!-- end navbar -->
			
			<div class="row-fluid slide">
				<div class="span12">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="<?php echo base_url(); ?>resources/images/a.jpg">
								<div class="carousel-caption">
									<h4>pic one</h4>
									<p>hello. </p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?php echo base_url(); ?>resources/images/b.jpg">
								<div class="carousel-caption">
									<h4>pic two</h4>
									<p>hello </p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?php echo base_url(); ?>resources/images/c.jpg">
								<div class="carousel-caption">
									<h4>pic three</h4>
									<p>hello </p>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
				</div>
			</div><!-- end slide -->
			
			<div class="row-fluid front-content">
				<div class="span12">
					<div class="row-fluid">
						<div class="span4">
							<h1>New Offer1</h1>
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlax8WAcHwhesGkA_5w98Bi5AXGlvpZhIAkAwcT0fqJnQQcVMz">
							<p>hello there.</p>
							<a href="who-we-are.html" class="btn btn-small btn-inverse"><i class="icon-plus-sign icon-white"></i> read more</a>
						</div>
						<div class="span4">
							<h1>New Offer2</h1>
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_UO8mofTjJentQjVwe7pXULd8rHy9sAer57JW-NmFai4hDNs_">
							<p>helloooooooooooooooooooooooo.</p>
							<a href="" class=""><i class=""></i> read more</a>
						</div>
						<div class="span4">
							<h1>New Offer3</h1>
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzIZiOuclcT0UnZE-KqGvtSuxS9iwM86DPCbFb8EGAQA2sZhIi">
							<p>hellooooooooooooooooooooooooooooooooo.</p>
							<a href="project.html" class="btn btn-small btn-inverse"><i class="icon-plus-sign icon-white"></i> read more</a>
						</div>
					</div><!-- end row-fluid -->
				</div><!-- end span12 -->
			</div><!-- end front-content -->
		</div><!-- end container -->	
	</div><!-- end wrapper -->
	
	<div class="row-fluid footer">
		<div class="footer-wrap">			
			<div class="span6">
				<h2>Property Mngt</h2>	
				<p>heeloo.</p>
				<div class="controls">
					<p class="footer-subscribe">Subscribe to our Newsletter</p>
					<div class="input-append">
						<input class="span5" id="appendedInputButton" size="16" type="text" placeholder="Enter your email address..."><button class="btn" type="button">Subscribe</button>
					</div>
				</div>
			</div><!-- end span6 -->
			<div class="span6 footer-address">
				<h2>Contact Us</h2>	
				<div class="">
					<i class="icon-home icon-white"></i>
					<p>79 horton place, SL<br>Phone: 1234566<br>Fax:4567890</p>
				</div>
				<div class="">
					<i class="icon-envelope icon-white"></i><p>email@propmngt.com</p> 
				</div>
				<div class="footer-sosio">
					<img src="img/fb.png" alt="facebook" title="facebook"><img src="img/twitter.png" alt="twitter" title="twitter">
				</div>				
			</div><!-- end footer address -->			 
			<div class="span12">
				<div class="footer-copyright">Copyright © 2017 property mngt Company Profile. All right reserved. 
				</div>
			</div><!-- end span12 -->
		</div><!-- end footer wrap -->
	</div><!-- end footer -->
	<script>$('.carousel').carousel({interval: 2000})</script>
</body>
</html>
