<?php
	include('../includes/session_check.php');
?>
<?php
	include('../includes/connect.php');
	include('../includes/profile.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Photo</title>
	<style>

	</style>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../nab1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="nab1">
				<nav>
					<div class="navbar-header left_nav">
						<div >
							<div class="navbar-header">
								<a class="navbar-brand" href="#">
									<img alt="Brand" src="images/logo.png">
								</a>
							</div>
						</div>
					</div>
					<div class="right_nav" style="padding-right: 50px;padding-top: 20px;">
						<ul class="nav nav-pills nav navbar-nav navbar-right">
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;"><img onerror="this.onerror=null; this.src='../user/images/Default.jpg'" style="width: 50px;height: 50px;position: absolute;	left: -40px;top:0px;" id="myImg" src="../user/images/<?php echo "$image"; ?>"  class="img img-rounded ok img-responsive images" alt="" >
								<!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->&nbsp;<?php echo$_SESSION['username'] ?><span class="caret"></span></a>
								<ul class="dropdown-menu form1">
									<li><a href="../../index.php" >Site</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../../notice.php" >Notices</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../includes/session_out.php" >Log Out</a></li>
						
								</ul>
								
							</li>
						</ul>
					</div>

				</nav>

			</div>
			
		</div>
		<div class="row sec_row">
			<div  class="col-md-2 side_bar"  >
				<h3 class="a" style="padding-left: 20px;">Dashboard</h3>
				
				<ul>
					<li><a href="../index.php" class="a">
						<img style="width: 125px;height: 125px;" id="myImg" src="../user/images/<?php echo "$image"; ?>" onerror="this.onerror=null; this.src='../user/images/Default.jpg'" class="img img-circle  img-responsive images" alt="<?php echo"$title"; ?>" >
				<!-- <span class="glyphicon glyphicon-user" style="font-size: 100px;" aria-hidden="true"></span> --><br><p style="font-size: 17px;"><b><i><?php echo$_SESSION['username'] ?></i></b></p></a></li>
					<li><a href="../slider/index.php" >Slider</a></li>
					<li><a href="../gallery/index.php" >Gallery</a></li>
					 <li><a href="../post/index.php" >Post</a></li>
					<li><a href="../user/index.php" >User</a></li>
					 <li><a href="../includes/session_out.php" >Log Out</a></li>
				</ul>			
			</div>
			<div  class="col-md-10 content_bar"></div>
				<?php
					$id = $_GET['id'];
				// var_dump($id); die();
					$sql_query = "DELETE FROM `gallery` WHERE `id` = '$id'";
					// var_dump($sql_query); die();
					$result = $connect->query($sql_query);
					if($result){
						echo "<script>alert('Post deleted sucessfully')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
					else{
						echo "<script>alert('Failed to delete')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
				?>
			</div>
		</div>
		
	</div>
</body>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>


