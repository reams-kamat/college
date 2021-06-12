<?php
	include("admin/includes/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<style>
		
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="includes/post.css">

	<!-- <link rel="stylesheet" type="text/css" href="admin/nab1.css"> -->
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
					<li class="active"><a href="notice.php">Notice</a></li>
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
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-6 ">
				<div class="side_bar">
					<div>
						<h2 class="widget-title">Recent Posts</h2>
						<?php
							$sql_query="SELECT * FROM `post` order by `id` desc limit 0,6";
							$result = $connect->query($sql_query);
							if($result){
							while ($row = $result->fetch_assoc()) {
								?>
						<ul>
							<li class="sidebar-wrap_li"><span style="font-size: 20px;" class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;<a href="post.php?id=<?php echo($row['id']) ?>"><?php echo $row['title'];?></a></li>
							
						</ul>
						<?php
							}}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-6 ">
				<div style="margin-top:44px;">
					<?php
					$post_id = $_GET['id'];
					// var_dump($post_id); die();
					$sql_query="SELECT * FROM `post` WHERE `id` = '$post_id'";
					$result = $connect->query($sql_query);
					if($result){
					while ($row = $result->fetch_assoc()) {
						$title=$row['title'];
						$author=$row['author'];
						$image=$row['image'];
						$content=$row['content'];
						$date=$row['date'];
						?>
					<h2 style="color: #0064b2;font-weight: 400;display: block;margin: 30px 0 0;"><?php echo"$title"; ?></h2>
					<img id="myImg" src="admin/post/images/<?php echo "$image"; ?>"  class="img img-responsive images" alt="<?php echo"$title"; ?>" style="width:100%;max-width:300px;padding: 20px;">

					<!-- The Modal -->
					<div id="myModal" class="modal">
					<!--   <span class="close" style="font-size: 40px;font-weight: bold;position: absolute;  top: 20px;  right: 35px;  color: #f1f1f1;  transition: 0.3s;display: block;background: black;">&times;</span> -->
					<span class="glyphicon glyphicon-remove remove" aria-hidden="true" style="font-size: 20px;font-weight: bold;position: absolute;  top: 25px;  right: 35px;  color: #f1f1f1;  transition: 0.3s;"></span>
					  <img class="modal-content" id="img01">
					  <div id="caption"></div>
					</div>
					
						<div class="col-sm-6 col-sm-6 col-xs-12">
							<p >Published on :&nbsp;&nbsp;<i><?php echo  date('d M, Y', strtotime($date)); ?></i></p>
						</div>
						<div class="col-sm-6 col-sm-6 col-xs-12">
							<p><i>Author:<b><?php echo "$author"; ?></b></i></p>
						</div>
						
					<h3><u>Description:</u></h3>
					<div style="padding:5px 20px  20px 20px">
						<p><?php echo "$content"; ?></p>
					</div>
					<?php
						}		
					}
				?>
				
						
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that removes the modal
var span = document.getElementsByClassName("remove")[0];

// When the user clicks on <span> (x), remove the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
	$('.slide').hiSlide();
</script>
</html>
