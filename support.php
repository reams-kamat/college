<!DOCTYPE html>
<html>
<head>
	<title>Support</title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		.form_top{
			width: 100%;
			height: auto;
			color: white;
			padding: 30px;
			background:  #003366;
		}
		.inquery_form{
			background: #efefef;
			height: 640px;
		}
		ul.icon {
		  list-style: none;
		  font-size: 17px;
		}
		.glyphicon {
		    font-size: 18px;
			display: inline !important;
		}

		.g-recaptcha{
	  	width: 10px;
	  }
	  textarea{
	  	width: 300px;
	  	height: 50px;
	  }
		@media screen and (max-width: 320px) {
	  .map {
	    width:230px; ;
	    height: auto;
	    /*background: red;*/
	  }
	  textarea{
	  	width: 200px;
	  	height: 50px;
	  }
}

	  @media screen and (max-width: 375px) and (min-width: 321px){
		 .map {
		 	/*border:10px;*/
	    width:320px;
	    /*height: auto;*/
	    background: red;
	  }
	   textarea{
	  	width: 250px;
	  	height: 50px;
	  }
}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
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
        <li ><a class="a" href="about.php">About</a></li>
        <li class="active"><a href="support.php">Support</a></li>
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
		<div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:auto;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Support</i></h3>
				</div>
			</div>
		
				
	</div>
	<div class="container">
		<div class="row">
			<div class="form_top">
			<h3><b> <u>QUICK CONTACT US</u></b></h3>
			<p style="font-size: 17px;"><i>Himalaya Darshan College is here to provide you with more information,answer any inquery. For any inqueries please complete the form below and we will endeavor to response as quickly as possible.  </i></p>
		    </div>
		</div>
		<div class="row">	
			<div class="col-md-7 col-sm-6 col-xs-12 inquery_form">
				<div>
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

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                            if(isset($_SESSION['captcha'])){
						    $now = time();
						    if($now >= $_SESSION['captcha']){
						      unset($_SESSION['captcha']);
						    }
						  }
						                        
                        ?>
					<form action="form_process.php" method="post" style="padding: 30px">
						<div class="form-group">
					    <label for="exampleInputName2">Name</label>
					    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Enter your full name">
					  </div>
					   <div class="row">
					   	<div class="col-md-6">
					   		<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
					   	</div>
					   	<div class="col-md-6">
					 		<div class="form-group">
								<label for="exampleInputPhone_number1">Phone Number</label>
								<input type="text" name="phn" class="form-control" id="exampleInputPhone_number1" placeholder="Enter your phone number">
							</div>
					   	</div>					   	
					   </div>
						<div class="form-group">
					    <label for="exampleInputSubject2">Subject</label>
					    <input type="text" name="subject" class="form-control" id="exampleInputSubject2" placeholder="Enter the Subject">
					  </div>
					  <label for="exampleInputMessage2">Message</label>
					  <div class="form-group">
					    <textarea class="msg" name="message" >Enter the Message.....</textarea>
					  </div>
					 <!-- <div >
									  	<?php
				            if(!isset($_SESSION['captcha'])){
				              echo '
				                
				                  <div class="g-recaptcha " data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
				               
				              ';
				            }
				          ?>
					  </div> -->
					  	<br>
						<button type="submit" name="submit" class="btn btn-default">Send</button>
						<button type="reset" name="reset" class="btn btn-default">Reset</button>
					</form>
				</div>
			</div>		
			<div class="col-md-5 col-sm-6 col-xs-12 ow" style="background:#0059b3 ">
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