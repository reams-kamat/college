<?php
	include('includes/session_check.php');
	include('includes/connect.php');
	include('includes/profile.php');

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style>

	</style>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab1.css">
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
							<li class="dropdown">
								<a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;"><img onerror="this.onerror=null; this.src='user/images/Default.jpg'" style="width: 50px;height: 50px;position: absolute;	left: -40px;top:0px;" id="myImg" src="user/images/<?php echo "$image"; ?>"  class="img img-rounded ok img-responsive images" alt="" ><!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->&nbsp;<?php echo$_SESSION['username'] ?><span class="caret"></span></a>
								<ul class="dropdown-menu form1">
									<li><a href="../index.php" >Site</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../notice.php" >Notices</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../logout.php" >Log Out</a></li>
						
								</ul>
								
							</li>
						</ul>
					</div>

				</nav>

			</div>
			
		</div>
		<div class="row sec_row">
			<div  class="col-md-2 side_bar">
				<h3 class="a" style="padding-left: 20px;">Dashboard</h3>
				
					<ul>
					<li><a href="index.php">
						<img style="width: 125px;height: 125px;" id="myImg" src="user/images/<?php echo "$image"; ?>" onerror="this.onerror=null; this.src='user/images/Default.jpg'" class="img img-circle  img-responsive images" alt="<?php echo"$title"; ?>" >
				<!-- <span class="glyphicon glyphicon-user" style="font-size: 100px;" aria-hidden="true"></span> --><br><p style="font-size: 17px;padding-left: 30px;"><b><i><?php echo$_SESSION['username'] ?></i></b></p></a></li>
					<li><a href="course/index.php" >Courses</a></li>
					<li><a href="slider/index.php" >Slider</a></li>
					<li><a href="gallery/index.php" >Gallery</a></li>
					<li><a href="post/index.php" >Post</a></li>
					<li><a href="user/index.php" >User</a></li>
					<li><a href="../logout.php" >Log Out</a></li>

					

				</li>
			</ul>		
		</div>
			<div  class="col-md-10 content_bar"style="background: #e6e6ff;">
				 <div >
                    <h1 align="center" style="color:#000000;padding-top: 50px;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>&nbsp;Welcome to the Dashboard !!!</h1>
                </div>
                <div class="col-md-12" style="padding: 60px 50px;">
                	     <?php
                    // include("includes/connect.php");
                    $user=$_SESSION['username'];
                    $sql_query="SELECT * FROM `users` WHERE `username`= '$user'";
                    $result = $connect->query($sql_query);
                    if($result){
                    while ($row = $result->fetch_assoc()) {
                    $email=$row['email'];
                    $name=$row['name'];
                    $address=$row['address'];
                    $phn=$row['phn'];
                    $password=$row['password'];
                    $image=$row['image'];
                    $username=$row['username']; 
                    $date=$row['member_since'];
                         }}  
                ?> 

                           <div class="col-sm-3">
                                <img class="img img-rounded" src="<?php echo (!empty($image)) ? 'user/images/'.$image.'':'user/images/Default.jpg'  ; ?>" width="100%" height="240" style="border-radius: 10px; ">
                            </div>
                            <div class="col-sm-9" style="height:100px;padding: 40px;">
                                <div class="row">
                                    <div class="col-sm-3" style="background: white;">
                                        <h4>Name:</h4>
                                        <h4>Email:</h4>
                                        <h4>Username:</h4>
                                        <h4>Contact Info:</h4>
                                        <h4>Address:</h4>
                                        <h4>Member Since:</h4>
                                    </div>
                                    <div class="col-sm-6" style="background: white;">
                                        <h4><?php echo $name; ?>
                                            <span class="pull-right">
                                                <a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
                                            </span>
                                        </h4>
                                        <h4><?php echo $email; ?></h4>
                                        <h4><?php echo $username; ?></h4>
                                        <h4><?php echo (!empty($phn)) ? $phn : 'N/a'; ?></h4>
                                        <h4><?php echo (!empty($address)) ? $address : 'N/a'; ?></h4>
                                        <h4><?php echo (!empty($date)) ? date('d M, Y', strtotime($date)) : 'N/a'; ?></h4>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="../logout.php" style="margin-bottom: 10px;margin-top: 20px;" class="btn btn-danger">Log Out</a>
                                        <a href="about.php" class="btn btn-info" style="margin-bottom: 10px;">Learn More</a>
                                        <a href="#edit_pw" class="btn btn-warning " data-toggle="modal"><i class="fa fa-edit_pw"></i>Change Password</a>
                                       <!--  <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
                                    </div>
                                </div>
                            </div>
                        
                </div>
                <h4 align="center"><i>Manage all your website items from the dashboard and easily update the contents of the site.<br>Enjoy!!!</i></h4>
<?php include 'includes/profile_modal.php'; ?>
<?php include 'includes/password_modal.php'; ?>
			 -->
			</div>
		</div>
	
</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
</html>
