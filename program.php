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
<?php
		$course = $_GET['course'];
						include('admin/includes/connect.php');
						    $result = mysqli_query($connect,"SELECT * FROM `courses` WHERE `name`='$course'");
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$name=$row['name'];
								$des=$row['des'];
								$image=$row['image'];
								$affiliated=$row['affiliated'];
								$photo=$row['stu_photos'];
						       
						    ?>

	<!-- ?> -->
	<div class="container-fluid">	
		<div  class="row" style="background: url(images/home/2.jpg);background-position: center;background-repeat: no-repeat;background-size:cover; height:auto;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i><?php echo $name ; ?>&emsp;Program</i></h3>
				</div>
		</div>
	</div>
	
	<div class="container-fluid"  style="background-image: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size:cover;width:100%;height:auto;">
		<div style="padding:60px 60px 0px 60px;">
			<div class="row">
				<div class="col-md-3" style="padding-bottom:60px;">
				<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;background:white;">
					<tr>
						<td style="padding: 5px;">
							<a href="program.php?course=<?php echo $name ; ?>">
								<img src="admin/course/images/course/<?php echo $image ?>" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="program.php?course=<?php echo $name ; ?>" style="color: black;">
								<h4><?php echo $name ; ?></h4>
								<p><?php echo $affiliated; ?>&ensp;Affiliated</p>
							</a>
						</td></tr>
					</center>
				</table>
			</div>
			<div class="col-md-6" style="padding-bottom:60px;">
				<h4 style="width:100%;background:#3d4e5b;height: 40px;color:white;padding-top:10px;padding-left: 15px;margin-bottom: 0px;">Description</h4> 
				<div style="background-color: white; padding: 10px;"> 
				<h5>Course Overview</h5>
				<p><?php echo $des ; ?></p>
				</div>
			</div>
			<div class="col-md-3" style="padding-bottom:60px;">
				<div class="row">
					<div class="col-md-12">
						<h4 style="width:100%;background:#3d4e5b;height: 40px;color:white;padding-top:10px;padding-left: 15px;margin-bottom: 0px;">Students</h4>	
					</div>
				</div>	
				<div  style="background-color:  #e6e6ff;padding: 10px;">
					<div class="row">	
						<?php
							$i="";
							$query="SELECT `stu_photos` FROM courses WHERE `name`='$course'";
							$fire=mysqli_query($connect,$query);
							$data=mysqli_fetch_array($fire);
							$res=$data['stu_photos'];
							$res=explode(" ",$res);
							$count=count($res)-1;
							for($i=0;$i<$count;++$i)
							{
						?>					
							<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
								<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
									<tr>
										<td style="padding: 5px;">
											<a href="#">
												<img src="admin/course/images/students/<?php echo $res[$i]; ?>"  class="aaa img-responsive " >
											</a>
										</td>
									</tr>
								</table>	
							</div>
						<?php
							}
						?>					
					</div>
				</div>
			</div>
			</div>
		</div>		
	</div>
	<?php
			}
		// }
	?>		
	<div class="container">	
		<h3>Related Courses</h3><hr><br>

		<div class="row">
				<?php
			include('admin/includes/connect.php');
			$result = mysqli_query($connect,"SELECT * FROM `courses`  WHERE `id`<>'$id' ORDER BY 1 DESC LIMIT 4");
			while($row = mysqli_fetch_array($result)){
				$iid=$row['id'];
				$name=$row['name'];
				$des=$row['des'];
				$image=$row['image'];
				$affiliated=$row['affiliated'];
		?>	
				<div class="col-md-3 col-sm-6 col-xs-12"style="padding-bottom: 30px;">
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
			?>
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