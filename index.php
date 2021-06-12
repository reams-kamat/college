<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		.slideer{
			background-image: url(images/home/1.jpg);
			width:100%;
			height: 465px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
					}
		.slider_arrow{
			 opacity: 0.0;
		}
		.slider_arrow:hover{
  			opacity: 1.0;
		}
		
				

	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
	
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
					<li class="active"><a href="index.php" >Home</a></li>
					<li class="dropdown">
						<a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>										
						<ul class="dropdown-menu">
					<?php include'includes/programs_dropdown.php'; ?>						
						</ul>
					</li>
						
					<li ><a href="gallery.php" class="a">Gallery</a></li>
					<li><a href="notice.php"class="a">Notice</a></li>
					<li ><a class="a" href="about.php">About</a></li>
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
	</div>
	<div class="slideer">
		<div class="">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  


				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  	<div class="item active">
				      <img src="images/home/4.png" alt="Failed to load image" class="img img-responsive" style="height: 465px; width: 50%;float: right;">
				      <div class="carousel-caption1">
				        <h1>Share your information </h1>
				        <p> Lorem1 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod lorem</p>
				        <a href="register.php" type="button" class="btn btn-primary btn-lg" >
				        	<img class="alignnone" alt="" src="images/home/book1.png">
				        	&nbsp;&nbsp;&nbsp;&nbsp;Get Started</a>
				      </div>
				    </div>
				  	<?php
						include('admin/includes/connect.php');
						    $result = mysqli_query($connect,"SELECT * FROM `slider` order by 1 desc");
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$title=$row['title'];
								// $author=$row['author'];
								$image=$row['image'];
								$content=substr($row['content'],0,300);
								// $date=$row['date'];
						       
						    ?>

    <div class="item">
      <img src="admin/slider/images/<?php echo "$image"; ?>" alt="Failed to load image" class="img img-responsive" style="height: 465px; width: 50%;float: right;" >
      <div class="carousel-caption1">
      	<h1><?php echo "$title"; ?></h1>
        <p><?php echo "$content"; ?>....</p>
        <a href="register.php" type="button" class="btn btn-primary btn-lg">
        	<img class="alignnone" alt="" src="images/home/book1.png">
        	&nbsp;&nbsp;&nbsp;&nbsp;Get Started</a>
      </div>
    </div>
    
    <!-- <div class="item">
      <img src="images/home/3.png" alt="Failed to load image" class="img img-responsive" style="height: 465px; width: 50%;float: right;margin-right: 50px;">
      <div class="carousel-caption1">
        <h1>Share your informationjhkhjhgb nbk hndghdf hkf </h1>
        <p> Lorem1 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        <a href="register.php">
        	<img class="alignnone" alt="" src="images/home/book1.png">
        	<button type="button" class="btn btn-primary btn-lg" style="width: 140px;">&nbsp;&nbsp;&nbsp;&nbsp;Get Started</button></a>
      </div>
    </div> -->
   			<?php
							 }
							mysqli_close($connect);

					?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control slider_arrow" href="#carousel-example-generic"  data-slide="prev"> 
    <span class="glyphicon glyphicon-chevron-left slider_arrow"   aria-hidden="true"></span>
    <span   class="sr-only slider_arrow">Previous</span>
  </a>
  <a class="right carousel-control slider_arrow" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right slider_arrow" aria-hidden="true"></span>
    <span class="sr-only slider_arrow">Next</span>
  </a>
</div>
		</div>
	</div>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<img src="images/home/book.jpg" style="float: left;">
				<h4>&nbsp;&nbsp;&nbsp;Learn Anything Online</h4><br>
				<p>Suspendisse ante mi, iaculis ac eleifend id, venenatis non eros. Sed rhoncus gravida elit, eu sollicitudin sem iaculis. Proin scelerisque, ipsum mollis posuere metus</p>
			</div>
			<div class="col-md-4 col-xs-12">
				<img src="images/home/user.jpg" style="float: left;">
				<h4>&nbsp;&nbsp;&nbsp;Talk to Our Experts</h4><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud 
				</p>
			</div>
			<div class="col-md-4 col-xs-12">
				<img src="images/home/msg.jpg" style="float: left;">
				<h4>&nbsp;&nbsp;&nbsp;Communicate with People</h4><br>
				<p>Nullam viverra, magna vitae mollis venenatis, leo mi dignissim quam, et lacinia purus diam nec sapien. Cras aliquet, purus non rhoncus aliquet, dapibus.</p>
			</div>
			
		</div>
		<h3>Popular Courses</h3><br>
		<div class="row">
			<?php
						include('admin/includes/connect.php');
						    $result = mysqli_query($connect,"SELECT * FROM `courses` order by 1 desc LIMIT 4");
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$name=$row['name'];
								// $author=$row['author'];
								$image=$row['image'];
								$affiliated=$row['affiliated'];
								// $date=$row['date'];
						       
						    ?>
			<div class="col-md-3 col-sm-6" style="padding-bottom: 50px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					
					<tr>

						<td style="padding: 5px;">
							<a href="program.php?course=<?php echo $name ; ?>">
						<img src="admin/course/images/course/<?php echo $image ?>" class="img img-responsive course_margin images"></a>
					</td></tr>

						<tr class="row_color"><td>
							<a href="program.php?course=<?php echo $name ; ?>" style="color: black;">
							<h4><?php echo $name ; ?></h4>
							<p><?php echo $affiliated; ?>&ensp;Affiliated</p></a>
						</td></tr>
					</table>
				</div>
				
			</div>
	<?php
		}
	mysqli_close($connect);
	?>		
			
			
		</div>
		<div class="row pad" style="margin-bottom: 50px">
			<div class="col-md-6 col-sm-6">
				<h3>Founders</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="images/home/name.jpg" alt="Failed to load image" class="img-thumbnail">
					</div>
				<div class="col-md-9">
					<a href="#" style="color:#337ab7;"><h4>Steven Granger</h4></a>
					<h6>Principle</h6>
					<P>Cras a neque diam. Aenean dapibus accumsan velit eget imperdiet. Quisque sapien neque, fermentum ac pharetra ac, iaculis a elit. Morbi tincidunt, lectus et dignissim pharetra, elit leo lacinia purus, eu porta. Aenean adipiscing, sed lacinia sapien tincidunt.</P>
				</div>
				</div>
				<div class="row">
				<div class="col-md-3">
					<img src="images/home/name1.jpg" alt="Failed to load image" class="img-thumbnail">
				</div>
				<div class="col-md-9">
					<a href="#" style="color:#337ab7;"><h4>Mark Blackwood</h4></a>
					<h6>HOD</h6>
					<P>Fusce vehicula tortor quis odio interdum auctor. Ut iaculis eleifend pharetra. Nulla rutrum, magna non pulvinar tincidunt, neque dui eleifend lacus, fringilla cursus justo augue non nulla. Vivamus sem nunc, tincidunt sit cursus, porttitor pharetra.<P>
				</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<h3>Top Experts</h3>
				<div class="row">
					<div class="col-md-2">
						<img src="images/home/user1.jpg" alt="Failed to load image" class="img-circle" height="70">
					</div>
					<div class="col-md-10">
						<p>Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!
								<br>
						<b>Jessica White</b></p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-2">
						<img src="images/home/user2.jpg" alt="Failed to load image" class=" img img-circle "  height="70">
					</div>
					<div class="col-md-10">
						<p>				Maecenas sed metus sem, ac varius ante. Nullam non mi tempor nisl varius consectetur vel in ipsum. Vestibulum sem diam, vehicula sit amet luctus adipiscing, viverra in sem. Proin molestie.
							<br>
							<b>John Dawson</b>				
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-2">
						<img src="images/home/user3.jpg"  height="70" alt="Failed to load image" class="img-circle">
					</div>
					<div class="col-md-10">
						<p>Donec convallis, mauris quis tempor pulvinar, lorem neque rhoncus nisl, at hendrerit quam leo volutpat est. Quisque fringilla, nulla vitae vehicula fermentum, nibh dolor tristique, scelerisque.
						<br>
							<b>Mary Springs</b>			
						</p>
					</div>
					
				</div>
			</div>
			
		</div>

	</div>
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