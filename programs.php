<?php
	include("admin/includes/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Programs</title>
	<style></style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="includes/programs.css">

	<!-- <link rel="stylesheet" type="text/css" href="includes/navv.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">

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
					<li class="dropdown active">
						<a href="programs.php" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
						<ul class="dropdown-menu">
						<?php include'includes/programs_dropdown.php'; ?>
						</ul>
					</li>
					<li ><a href="gallery.php" class="a">Gallery</a></li>
					<li><a href="notice.php"class="a">Notice</a></li>
					<li><a href="about.php" class="a">About</a></li>
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
		<div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Programs</i></h3>
				</div>
		</div>
		<div class="row" style="font-family: 'Roboto Condensed', sans-serif;
    			overflow-x: hidden; background: #e6e6ff;background-image: url(imdages/programs/all.jpg);background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: blur;">
    			<section id="slider">
    				<input type="radio" name="slider" id="s1">
    				<input type="radio" name="slider" id="s2">
    				<input type="radio" name="slider" id="s3" checked>
    				<input type="radio" name="slider" id="s4">
    				<input type="radio" name="slider" id="s5">
    				<label for="s1" id="slide1">
    					<img src="images/programs/bca.jpg" class="img img-responsive " style="height: 100%;width: 100%" alt="BCA image" />
    					<a href="bca.php" class="bottom-left ">BCA</a>
    				</label>
    				<label for="s2" id="slide2">
    					<img src="images/programs/bim.jpg"  class="img img-responsive " style="height: 100%;width: 100%"  alt="BIM image">
    					<a href="bim.php" class="bottom-left">BIM</a>
    				</label>
    				<label for="s3" id="slide3">
    					<img src="images/programs/bbs.jpg" class="img img-responsive " style="height: 100%;width: 100%"  alt="BBS imsge" />
    					<a href="bbs.php" class="bottom-left">BBS</a>
    				</label>
    				<label for="s4" id="slide4">
    					<img src="images/programs/csit.jpg" class="img img-responsive " style="height: 100%;width: 100%"  alt="BSc. Csit image" />
    					<a href="csit.php" class="bottom-left">CSIT</a>
    				</label>
    				<label for="s5" id="slide5">
    					<img src="images/programs/bhm.jpg" class="img img-responsive " style="height: 100%;width: 100%" alt="BHM image "/>
                        <a href="bhm.php" class="bottom-left">BHM</a>
    				</label>
    			</section>

		</div>
		<div  class="row" style="background: url(images/home/2.jpg);background-position: center;background-repeat: no-repeat;background-size:cover; height:75px;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Our Courses</i></h3>
				</div>
		</div>	
	</div>

	<div class="container">
		<div style="padding: 60px;">
		
			<div class="row" >
					<?php
						include('admin/includes/connect.php');
						    $result = mysqli_query($connect,"SELECT * FROM `courses` order by 1 desc");
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$name=$row['name'];
								// $author=$row['author'];
								$image=$row['image'];
								$affiliated=$row['affiliated'];
								// $date=$row['date'];
						       
						    ?>
			<div class="col-md-4 col-sm-4" style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					<tr>
						<td style="padding: 5px;">
							<a href="program.php?course=<?php echo $name ; ?>">
						<img src="admin/course/images/course/<?php echo $image ?>" class="img course_margin course_margin img-responsive images">
					</a>
					</td></tr>
					<center>
						<tr class="row_color"><td>
							<a href="program.php?course=<?php echo $name ; ?>" style="color: black;">
							<h4><?php echo $name ; ?></h4>
							<p><?php echo $affiliated; ?>&ensp;Affiliated</p>
						</a>
						</td></tr></center>
					</table>
				</div>
				
			</div>
				<?php
		}
	mysqli_close($connect);
	?>	
	</div>	
		</div>
	</div>
	<?php
		include('includes/footer.php')
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
	</button>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
	$('.slide').hiSlide();
</script>
</html>