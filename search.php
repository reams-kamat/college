<?php
	include('admin/includes/connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>You searched for &nbsp;<?php echo $_GET['search']; ?></title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		.ok{
			color: black;
		}
		.ok:hover{
			text-decoration: none;

		}
	
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="nab.css"><link rel="stylesheet" type="text/css" href="includes/navv.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
					<li><a href="about.php" class="a">About</a></li>
					<li><a href="support.php"class="a">Support</a></li>
					<li>
						<div class="search-container">
							<form action="search.php" method="get" class="" role="search">
								<input class="search" id="searchleft" type="search" name="search" placeholder="Search" value="<?php echo $_GET['search']; ?>">
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
		<?php
			if (isset($_GET['search'])){
				$search_id = $_GET['search'];
				$query="SELECT * FROM `post` where title like '%$search_id%' or content like '%$search_id%'";
				 // var_dump($query); die();
				$result = $connect->query($query);
				if($result->num_rows>0){
					while ($row = $result->fetch_assoc()) {
					$id=$row['id'];
					$title=$row['title'];
					$image=$row['image'];
					$content=substr($row['content'],0,400);
				?>
		<a class="ok" href="post.php?id=<?php echo"$id"; ?>">
		<h2><?php echo "$title"; ?></h2></a>
		<a class="ok" href="post.php?id=<?php echo"$id"; ?>"><p><?php echo "$content"; ?></p></a>
		<a class="btn btn-danger" href="post.php?id=<?php echo "$id"; ?>">Read More</a>
		<?php
			}}
			else
				{
				echo"<h2>No Results found.</h2><br><br><br>";
				}
			}
		?>
		<hr>
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