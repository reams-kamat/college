<?php
// database connection
include('includes/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		.form_top{
			width: 100%;
			height: 70px;
			color: white;
			background:  #003366;
		}
		.inquery_form{
			background: #efefef;
			height: auto;
		}
		ul.icon {
		  list-style: none;
		  font-size: 17px;
		}

	@media screen and (max-width: 320px) {
	  .map {
	    width:230px; ;
	    height: auto;
	    /*background: red;*/
	  }
}

	  @media screen and (max-width: 375px) and (min-width: 321px){
		 .map {
		 	/*border:10px;*/
	    width:320px;
	    height: auto;
	    background: red;
	  }
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
		<div  class="row ow" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Registration</i></h3>
				</div>
			</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12" >
				<div class="row">
					<div class="col-md-12 form_top ow">
						<p style="text-align: center;font-size: 20px;padding-top: 20px;"><b>Registration Form</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 inquery_form">
						<div >
							<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_name']))
                            {
                                $Msg = "Please enter valid name ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_email']))
                            {
                                $Msg = " Invalid Email address ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_password']))
                            {
                                $Msg = "The two passwords do not match";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['failed']))
                            {
                                $Msg = "Email already exist";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                              if(isset($_GET['failed1']))
                            {
                                $Msg = "Phone number already exist";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['failed2']))
                            {
                                $Msg = "Username already exist";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_file_format']))
                            {
                                $Msg = "Invalid file format";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['large_size']))
                            {
                                $Msg = "Image size larger than 2 MB can't be uploaded";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                              if(isset($_GET['failed3']))
                            {
                                $Msg = "Failed to register";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['success']))
                            {
                                $Msg = " You are registered sucessfully !!! ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
							<form action="user_registration.php" style="padding: 30px;" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputName2">Name</label>
									<input type="text" required="true" name="name" class="form-control" id="exampleInputName2" placeholder="Enter your full name">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" required="true" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPhone_number1">Phone Number</label>
											<input type="Phone_number" required="true" name="phn" class="form-control" id="exampleInputPhone_number1" placeholder="Enter your phone number">
										</div>
									</div>					   	
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Username</label>
											<input type="text" required="true" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputName2">Address</label>
											<input type="text" required="true" name="address" class="form-control" id="exampleInputName2" placeholder="Address">
										</div>
									</div>					   	
								</div>								
								<div class="form-group">
									<label for="exampleInputEmail1">Image</label>
									<input type="file" required="true" name="image" class="form-control" id="exampleInputimage1" placeholder="image">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" required="true" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Repeat Password</label>
											<input type="password" name="password1" class="form-control" id="exampleInputPassword1" required="true" placeholder="Repeat Password">
										</div>
									</div>

								</div>
								<button type="submit" name="btn-send" class="btn btn-default">Register</button>
								<button type="reset" name="reset" class="btn btn-default">Reset</button><br><br>
								<p >Already a member&nbsp;&nbsp;<a href="#submit_login" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa fa-edit"></i>Log In</a></p>
								<br><br>
							</form>
							<?php include 'includes/log_in_model.php'; ?>

						</div>
					</div>
				</div>		
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 ow" style="background:#0059b3 ">
				<div style="color: white;">
					<p style="text-align:center;font-size: 20px;padding-top: 20px;"><b>Contact Information</b></p>
					<hr style="width:80%;text-align:center;border-width:2px;border-style:double;">
					<div style="padding:10px;">

						<ul class="icon">
							<li style="size:25px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Main Road, Biratnagar-09</li><br>
							<li class="email"><span class="glyphicon glyphicon-envelope " aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;himalayadarshancollege@gmail.com</li><br>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;021-472771</li>
					</ul>
					</div><br>
					<div align="center" style="padding-bottom: 20px;">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.226177215571!2d87.27626431454692!3d26.448437386290298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744969ab93ff%3A0xcdfeaa99bb5e0ce7!2sHimalaya%20Darshan%20College!5e0!3m2!1sen!2snp!4v1587969258146!5m2!1sen!2snp" width="auto" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php
		include("includes/footer.php");
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
	</button>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>