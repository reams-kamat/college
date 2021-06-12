<?php
	include('../includes/session_check.php');
	include('../includes/connect.php');
	include('../includes/profile.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<style>
	

label{
		font-size: 18px;
	}

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
								<a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;"><img onerror="this.onerror=null; this.src='images/Default.jpg'" style="width: 50px;height: 50px;position: absolute;	left: -40px;top:0px;" id="myImg" src="images/<?php echo "$image"; ?>"  class="img img-rounded ok img-responsive images" alt="" ><!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->&nbsp;<?php echo$_SESSION['username'] ?><span class="caret"></span></a>
								<ul class="dropdown-menu form1">
									<li><a href="../../index.php" >Site</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../../../notice.php" >Notices</a></li>
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
					<img style="width: 125px;height: 125px;" id="myImg" src="images/<?php echo "$image"; ?>" onerror="this.onerror=null; this.src='images/Default.jpg'" class="img img-circle  img-responsive images" alt="<?php echo"$title"; ?>" >
				<!-- <span class="glyphicon glyphicon-user" style="font-size: 100px;" aria-hidden="true"></span> --><br><p style="font-size: 17px;"><b><i><?php echo$_SESSION['username'] ?></i></b></p></a></li>
					<li><a href="../slider/index.php" >Slider</a></li>
					<li><a href="../gallery/index.php" >Gallery</a></li>
					 <li><a href="../post/index.php" >Post</a></li>
					<li><a href="../user/index.php" >User</a></li>
					 <li><a href="../includes/session_out.php" >Log Out</a></li>
				</ul>			
			</div>
			<div  class="col-md-10 content_bar">
				<div style="margin:50px;">
					<a class="btn btn_color" href="add_user.php" type="submit">Add Admin User</a>&nbsp;&nbsp;&nbsp;
					<a class="btn btn_color" href="index.php" type="submit">Manage Admin User</a>		
				</div>

				<div style="margin:50px;" >
					<h2 style="text-align: center;font-style:italic;"><b>Add User</b></h2>
					<?php
					// database connection
					include('../includes/connect.php');
					if (isset($_POST['publish'])) {
							$username=$_POST['username'];
							$email=$_POST['email'];
							$name=$_POST['name'];
							$role=$_POST['role'];
							$phn=$_POST['phn'];
							$date=date('y.m.d');
							$address=$_POST['address'];
							$password=$_POST['password'];
							$image_name=$_FILES['image']['name'];
							$image_type=$_FILES['image']['type'];
							$image_size=$_FILES['image']['size'];
							$image_tmp=$_FILES['image']['tmp_name'];
							// first check the database to make sure 
			                // a user does not already exist with the same username and/or email
			                $user_check_query = "SELECT * FROM `users` WHERE (username='$username' OR email='$email') OR  (username='$username' AND email='$email') LIMIT 1";
			                $result = mysqli_query($connect, $user_check_query);
			                $user = mysqli_fetch_assoc($result);
							if ($user == 0) {							
								if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="" or $image_type=="image/png" or $image_type=="image/gif") {
									if ($image_size<=2000000) {
										move_uploaded_file($image_tmp,"images/$image_name");
										$query="INSERT INTO `users`(`username`, `email`, `name`, `role`, `phn`, `address`, `password`, `image`,`member_since`) VALUES ('$username','$email','$name','$role','$phn','$address','$password','$image_name','$date')";
											$result = $connect->query($query);
											if($result){
												echo "<h4><i> Sucessfully added user</i></h4>";
											}
											else{
												echo "<h4><i> Failed to add user!!! </i></h4>";
											}
									} else {
										echo ("<script>alert('Image sizeless than 2 MB is valid.')</script>");
									}

								} 
								else {
									echo ("<script>alert('Invalid file type.')</script>");
									echo "<h4><i> Failed to upload photo!!! </i></h4>";
								}
							} else {
								echo ("<script>alert('Username or Email already exist.')</script>");
								echo "<h4><i> Failed to add user!! </i></h4>";
							}
						}
					?>
					<form action="add_user.php" method="POST" name="insert_form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" name="name" class="form-control" id="exampleInputtitle1" placeholder="Name" required="true">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputauthor1" placeholder="Email" required="true" >
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputauthor1" placeholder="Username" required="true">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Role</label>
							 <select class="form-control" name="role">
						        <option selected>user</option>
						        <option>admin</option>						       
						      </select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Contact Info.</label>
							<input type="text" name="phn" class="form-control" id="exampleInputauthor1" placeholder="Phone Number" required="true">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputauthor1" placeholder="Password" required="true">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Image</label>
							<input type="file"  name="image" class="form-control" id="exampleInputimage1" placeholder="image">
						</div>		
						<div class="form-group">
							<label for="exampleInputEmail1">Address</label><br>
							<textarea name="address"  id="content1" rows="2" cols="131"></textarea>
						</div>			
						<button type="submit" class="btn btn_color" name="publish">Publish</button>
					</form>
				</div>
			</div>
			</div>
		</div>
		
	</div>
</body>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>

