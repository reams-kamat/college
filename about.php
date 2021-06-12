<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		.col-md-2{
	padding-bottom: 10px;
}
.cer{
	padding-bottom: 10px;
}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: 0px">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img alt="Brand" class="img img-responsive" src="images/logo.png">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse right_nav" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav ">
					<li><a href="index.php" class="a">Home</a></li>
					<li class="dropdown">
						<a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
						<ul class="dropdown-menu">
							<?php include'includes/programs_dropdown.php'; ?>
						</ul>
					</li>
					<li ><a href="gallery.php" class="a">Gallery</a></li>
					<li><a href="notice.php"class="a">Notice</a></li>
					<li class="active"><a href="about.php">About</a></li>
					<li><a href="support.php"class="a">Support</a></li>
					<li>
						<div class="search-container">
							<form action="search.php" method="get" class="" role="search">
								<input class="search" id="searchleft" type="search" name="search" placeholder="Search">
								<label class="button1 searchbutton" for="searchleft"><span class="mglass">&#9906;</span></label>
							</form>
						</div>
					</li>
					

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php

  // database connection
					include('includes/connect.php');
  // nav change connection
					include('includes/signin_disappear_on_login.php');
					?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-left: 50px;">
					<h3><b>WELCOME</b></h3>
					<i><u><b>Welcome to Himalaya Darshan College</b></u></i>
					<hr>
				</div>
			</div>
		</div>
		<div class="row" style="margin-left: 45px;margin-right: 45px;">
			<div class="col-md-6">
				<img src="images/clz.jpg" alt="Failed to load" class="img-responsive">
			</div>
			<div class="col-md-6" style="font-size: 17px;">
				<p>Himalaya Darshan College, established in 2070 B.S. provides innovative opportunities in highly academic environment. The College has been established with an objective to promote value based quality education at the graduate level. The college fosters personal and professional growth of the students through its experienced and distinguished faculties, experts and professional from the national level.</p>
				<p>The College aims at disseminating quality and competitive education to meet the aspiration of the young students and challenges of the present millennium. The college offers modern value based curriculum in five degree granting programs, based on three disciplines: Science, Management and Humanities.</p>
			</div>
		</div>
		<br>
		<div class="row" style="margin-left: 45px;margin-right: 45px;">
			<div class="col-md-6" style="font-size: 17px;">
				<h3><b>VISSION</b></h3>
				<p style="font-size: 17px;">Himalaya Darshan College will provide excellent educational opportunities that are responsive to the needs of the community and help students meet economic, social, and environmental challenges to become active participants in shaping the world of the future.</p>
			</div>
			<div class="col-md-6">
				<h3><b>MISSION</b></h3>
				<p style="font-size: 17px;">The mission of Himalaya Darshan College is to cultivate the potential in every student to thrive as a global citizen by inspiring a love of learning and civic engagement, by challenging and supporting every student to achieve academic excellence, and by embracing the full richness and diversity of our community. We seek to create an environment that achieves equity for all students and ensures that each student is a successful learner, is fully respected, and learns to respect others.</p>
			</div>
			
		</div>
		<div class="row" style="margin-left: 45px;margin-right: 45px;">
			<h3><b>CERTIFICATE</b></h3>
			<i><u><b>Welcome to UNIVERSITY</b></u></i>
			<br><br>
			<div class="col-md-4 cer" >
				<img src="images/certificate.png" class="img-responsive">
			</div>
			<div class="col-md-4 cer" >
				<img src="images/certificate.png" class="img-responsive">
			</div>
			<div class="col-md-4 cer" >
				<img src="images/certificate.png" class="img-responsive">
			</div>
		</div>
		<br>
		<div class="row" style="margin-left: 45px;margin-right: 45px;">
			<center><h3><b><u>TIE-UPS & MOUS</u></b></h3></center>
			<br><br>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/a.png" class="img-responsive"></a>
			</div>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/b.gif" class="img-responsive"></a>
			</div>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/c.jpg" class="img-responsive"></a>
			</div>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/d.png" class="img-responsive"></a>
			</div>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/e.png" class="img-responsive"></a>
			</div>
			<div class="col-md-2" >
				<a href="#"><img src="images/tie/f.png" class="img-responsive"></a>
			</div>

			
		</div>
	</div>
		

	</div><br>
	<?php
		include('includes/footer.php');
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
	</button>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>

	