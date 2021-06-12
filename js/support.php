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
			height: 190px;
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
		  font-size: 18px;
		}
		.glyphicon {
		    font-size: 18px;
			display: inline !important;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="nab1">
				<nav class="navbar ">
					<div class="navbar-header left_nav">
						<div >
							<div class="navbar-header">
								<a class="navbar-brand" href="#">
									<img alt="Brand" src="images/logo.png">
								</a>
							</div>
						</div>
					</div>
					<div class="right_nav">
						<ul class="nav nav-pills nav navbar-nav navbar-right">
							<li><a href="index.php" class="a">Home</a></li>
							<li class="dropdown">
								<a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
								<ul class="dropdown-menu">
									<li><a href="csit.php" >B.Sc. CSIT</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="bbs.php">BBS</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">BIM</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">BCA</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">BHM</a></li>
								</ul>
							</li>
							<li ><a href="gallery.php" class="a">Gallery</a></li>
							<li><a href="notice.php"class="a">Notice</a></li>
							<li><a href="about.php"class="a">About</a></li>
							<li class="active"><a href="support.php">Support</a></li>
							<form class="navbar-form navbar-left" role="search" action="search.php" method="get">
								<div class="form-group" name="submit">
									<input type="text"  name="search" class="form-control" value="Search">
									<!-- <input type="submit" value="search" name="submit"> -->
								</div>
							</form>
							<?php
							
							// database connection
							include('admin/includes/connect.php');
							// nav change connection
							include('includes/signin_disappear_on_login.php');
							?>
							
						</ul>
					</div>
				</nav>

			</div>
			
		</div>
		<div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Support</i></h3>
				</div>
			</div>
		
				
	</div>
	<div class="container">
		<div class="row">
			<div class="form_top">
			<h3><b> <u>QUICK CONTACT US</u></b></h3>
			<h6 style="font-size: 17px;"><i>Himalaya Darshan College is here to provide you with more information,answer any inquery. For any inqueries please complete the form below and we will endeavor to response as quickly as possible.  </i></h6>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-7 inquery_form">
				<div style="margin: 30px;">
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
					<form action="form_process.php" method="post">
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
					    <textarea name="message" rows="5" cols="81">Enter the Message.....</textarea>
					  </div>
					 <div>
									  	<?php
				            if(!isset($_SESSION['captcha'])){
				              echo '
				                <div class="form-group" style="width:100%;">
				                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
				                </div>
				              ';
				            }
				          ?>
					  </div>
					  	<br>
						<button type="submit" name="submit" class="btn btn-default">Send</button>
						<button type="reset" name="reset" class="btn btn-default">Reset</button>
					</form>
				</div>
			</div>
			<div class="col-md-5" style="background:#0059b3 ">
				<div style="color: white;">
					<h3 style="text-align:center;"><b>Contact Information</b></h3>
					<hr style="width:80%;text-align:center;border-width:2px;border-style:double;">
					<div style="padding:30px;">
						<ul class="icon">
						<li style="size:25px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Main Road, Biratnagar-09</li><br>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;himalayadarshancollege@gmail.com</li><br>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;021-472771</li>
					</ul>
					</div>
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.226177215571!2d87.27626431454692!3d26.448437386290298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744969ab93ff%3A0xcdfeaa99bb5e0ce7!2sHimalaya%20Darshan%20College!5e0!3m2!1sen!2snp!4v1587969258146!5m2!1sen!2snp" width="460" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="footer">
		<div class="pad" style="color:white;">
			<div class="col-md-4">
				<h3 class="vl">Contact us</h3>
				<div class="col-md-12">
					Email <br><button type="button" class="btn btn-default btn-circle" aria-label="Left Align">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button>&nbsp;<i>himalayadarshancollege@gmail.com</i><br><br>
				</div>
				<div class="col-md-12">			  
						Phone Number <br><button type="button" class="btn btn-circle btn-default" aria-label="Left Align">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></button>&nbsp;<i>021-472771</i><br><br>
				</div>
					<div class="col-md-12">			  
						Address <br><button type="button" class="btn btn-circle btn-default" aria-label="Left Align">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>&nbsp;<i>Main Road, Biratnagar-09</i>
				</div>
					
			</div>
			<div class="col-md-4">
				<h3 class="vl">Subscribe us</h3>
					<div class="col-md-12">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcollege.hdc%2F&tabs=timeline&width=400&height=300&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="500" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
			</div>
			<div class="col-md-4" style="padding-left: 150px;">
				<h3 class="vl">Follow us</h3>
					<div class="col-md-12">
			            <!-- Go to www.addthis.com/dashboard to customize your tools -->
			            <div style="font-size: 0px;" class="addthis_inline_follow_toolbox" ></div>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eabb9a727c6535d"></script>
						<a href="https://twitter.com/KamatReams?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-show-count="false">Follow @KamatReams</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>				
					</div>
			</div>
		</div>
	</div>
	<div class="foot_nav">
				<div class="col-md-6">
					<p class="a" style="padding-left: 15px;padding-top: 17px;">Copyright &copy;2020,All right reserved @<b>Himalaya Darshan College</b></p>
				</div>
				<div class="col-md-6">
					<div class="menu1">
					<ul class="nav  nav navbar-nav navbar-right " >
							<a href="index.php" class="aa">Home</a>&emsp;
							<a href="programs.php" class="aa">Programs</a>&emsp;
							<a href="gallery.php" class="aa">Gallery</a>&emsp;
							<a href="notice.php" class="aa">Notice</a>&emsp;
							<a href="about.php" class="aa">About</a>&emsp;
							<a href="support.php" class="aa">Support</a>&emsp;
					</ul>
					</div>>
				</div>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
	</button>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>