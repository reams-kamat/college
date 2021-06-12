<!DOCTYPE html>
<html>
<head>
	<title>BCA</title>
	<style>
		#register_butto_nav{
			background-color:#f3715d;
		}
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}
		img.images{
			height:300px;
			width: 270px;
		}
		.desc1{
			padding-bottom: 1px;
			font-size: 17px;
		}
		.desc>li{
			padding-bottom: 1px;
			font-size: 17px;
		}
		tr>td,tr>th{
			padding: 5px;
		}
 	
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 80px;
  color: white;
  font-size:18px;
}

	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
  
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
							<li><a href="csit.php" >B.Sc. CSIT</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bbs.php">BBS</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bim.php">BIM</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bca.php">BCA</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bhm.php">BHM</a></li>
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
		<div  class="row" style="background: url(images/home/2.jpg);background-position: center;background-repeat: no-repeat;background-size:cover; height:auto;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Bachelor of Computer Applications</i></h3>
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
							<a href="bca.php">
								<img src="images/programs/bca.jpg" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="bca.php" style="color: black;">
								<h4>BCA </h4>
								<p>TU Affiliated</p>
							</a>
						</td></tr>
					</center>
				</table>
			</div>
			<div class="col-md-6" style="padding-bottom:60px;">
				<h4 style="width:100%;background:#3d4e5b;height: 40px;color:white;padding-top:10px;padding-left: 15px;margin-bottom: 0px;">Description</h4> 
				<div style="background-color: white; padding: 10px;"> 
				<h5>Course Overview</h5>
				<p><b>BCA (Bachelor of Computer Applications)</b> is a four-year undergraduate degree affiliated to Tribhuvan University (TU) . It is a technical degree that prepares students for a career in the field of computer applications and software development.  It is a common degree for CS/IT universities and is an alternative to the engineering counterpart, BE/BTech in Computer Science/IT which also takes four years. With a BCA, students can study for a masters in computer application.</p><br>
				<p>This 4 years program in Computer Application has been started with an objective to produce qualified computer software developers having wide range of knowledge in the technical field. Students learn to solve computer based problems of different types of business and industries.</p>
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
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yub.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/kishor.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yam.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>					
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yam.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yub.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/kishor.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>				
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yub.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/kishor.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yam.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>					
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yam.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/yub.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>
						<div class="col-md-4  col-sm-6 col-xs-12" style="padding-bottom:10px;">
							<table style="box-shadow: 0.5px 0.5px 0.5px 0.5px silver;border:0px;background:white;">
								<tr>
									<td style="padding: 5px;">
										<a href="#">
											<img src="images/programs/kishor.jpg"  class="aaa img-responsive " >
										</a>
									</td>
								</tr>
							</table>	
						</div>					
					</div>
				</div>
			</div>
			</div>
		</div>		
	</div>
	<div class="container">
		<br>
		<div class="row" style="font-family: strong;">
			<div class="col-md-6">
				<div border="1" style="background-color: #f2f2f2;padding: 10px;">

					<h4 align="center">Table of Contents</h4>
					<br>
					<list style="font-size: 15px;padding-bottom: 5px;" class="desc">
						<ol type="1">
							<li><a href="#bca1">Mission of studying BCA</a></li>
							<li><a href="#bca2">Why BCA at Himalaya Darshan College?</a></li>
							<li><a href="#bca3">Eligibility Criteria:</a></li>
							<li><a href="#bca4">Admission Criteria:</a></li>
							<li><a href="#bca5">BCA CREDIT HOURS:</a></li>
							<li><a href="#bca6">BCA GRADING SYSTEM::</a></li>
							<li><a href="#bca7">Job Prospectus:</a></li>
							<li><a href="#bca8">BCA Syllabus and Course Structure</a></li>

						</ol>
					</list>
				</div>
			</div>
			
		</div>
		<div class="row" id="bca1">
			<div class="col-md-12"style="padding: 50px;">
				<h4 ><b>Mission of studying BCA</b></h4>
				<hr>
				<p>The mission of the Bachelor in Computer Application (BCA) program is to:</p>
				<ul class="desc">
					<li>Understand the fundamental concepts of Computers, Business environment and IT Applications in Business.</li>
					<li>Successfully understand & analyze technical data to reach actionable conclusions, including technological solutions to the business.</li>
					<li>Learn technologies & IT languages, so the business problems could be addressed.</li>
					<li>Develop competent technical writing skills so as to enable the graduate to communicate business ideas to senior management and general public.</li>
					<li>To identify and sharpen their IT/programming skills.</li>
				</ul>
			</div>
		</div>
		<div class="row" id="bca2">
			<div class="col-md-12">
				<h4><b>Why BCA at Himalaya Darshan College?</b></h4>
				<hr>
				<ul class="desc">
					<li>In addition to an excellent teaching faculty, we have maintained the standard of being one of the top colleges in the country holding TU Toppers in different fields.</li>
					<li>Our college is making a lot of efforts in producing well qualified and practically trained students who happen to be experts in their respective field (BCA in this case).</li>
					<li>The Himalaya Darshan College also prepares their students to be prepared for higher level education after  BCA within and outside the country.</li>
					<li>Furthermore, our college focuses more on developing practical skills, teamwork and creativity through different programs.</li>
					<li>Himalaya Darshan College has a  very well-experienced and qualified team of determined faculty members with more than 20+ years of experience in their respective fields.</li>
				</ul >
				<br><br>
			</div>
		</div>
		<div class="row" id="bca3">
			<div class="col-md-12">
				<h4><b>Eligibility Criteria:</b></h4>
				<hr>
				<p><i>The candidate applying for Bachelor In Computer Application program must have:</i></p>
				<ul class="desc">
					<li>Sucessfully completed  a twelve –year schooling or equivalent from any University, Board or Institution recognized by Tribhuwan University.</li>
					<li>Secured a  minimum of second division(45%) or minimum C grade in all subjects in the twelve-year schooling or equivalent.</li>
				</ul>
				
			</div>
		</div>
		<div class="row" id="bca4">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Admission Criteria:</b></h4>
				<hr>
				<ul class="desc">
					<li>Candidates who pass the entrance exam taken by university will be interviewed and then selected candidate from interview will be eligible for admission.</li>
				</ul>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding-top:50px;">
				<h4 id="bca5"><b>BCA CREDIT HOURS:</b></h4>
				<hr>
				<p><i>Bachelor of Arts in Computer Application (BCA) Course Structure:</i></p>
				<table border="1" class="credit">
					<tr >
							<th colspan="2" style="background:#ff6600;color:white;" >Course Structure:</th>
					</tr>
					<tr>
						<td>Computer Application core courses</td><td>71(4*2+ 3*21) credit hours</td>
					</tr>
					<tr>
						<td>Elective Courses</td><td>12(3+3+3+3) credit hours</td>
					</tr>
					<tr>
						<td>Mathematics and Statistics courses</td><td>9( 3+3+3) credit hours</td>
					</tr>
					<tr>
						<td>Language courses</td><td>6(3+3) credit hours</td>
					</tr>
					<tr>
						<td>Social science and management courses</td><td>15(3+3+3+3+3) credit hours</td>
					</tr>
					<tr>
						<td>Internship/Project</td><td>13(2+2+6+3) credit hours</td>
					</tr>
					<tr>
						<th>Total Credit hours</th><th>	126</th>
					</tr>
				</table>
				<h4 style="padding-top: 20px;" id="bca6"><b>BCA GRADING SYSTEM:</b></h4>
				<table border="1" style="width:100%;font-size: 16px;">
					<tr >
							<th style="background:#ff6600;color:white;" >Grade</th>
							<th style="background:#ff6600;color:white;" >GPA</th>
							<th style="background:#ff6600;color:white;" >Remarks</th>
					</tr>
					<tr>
						<td>A</td><td>4.00</td><td>Distinction</td>
					</tr>
					<tr>
						<td>A-</td><td>3.70</td><td>Very Good</td>
					</tr>
					<tr>
						<td>B+</td><td>3.30</td><td>First Division</td>
					</tr>
					<tr>
						<td>B</td><td>3.00</td><td>Second Division</td>
					</tr>
					<tr>
						<td>B-</td><td>2.70</td><td>Pass in individual paper</td>
					</tr>
					<tr>
						<td>F</td><td>Below 2.70</td><td>Fail</td>
					</tr>
					
				</table>
			</div>
			<div class="col-md-6" style="padding-top:50px;" id="bca7">
				<h4><b>Job Prospectus:</b></h4>
				<hr>
				<p><i style="font-size: 15px;">The BCA graduates have a prosperous career opportunity at different government, non-government, private and public organizations, like software companies, telecommunications, computer networking companies etc. especially as a:</i></p>
				<ul class="desc1">
					<li>Software Developer</li>
					<li>Web Developer</li>
					<li>Network Administrator</li>
					<li>Database Administrator</li>
					<li>IT Manager/Officer</li>
					<li>Cryptographer</li>
					<li>System Analyst</li>
					<li>Project Manager</li>
					<li>Document Specialist</li>
					<li>Information System Auditor</li>
					<li>Artificial Intelligence Specialist</li>
					<li>Technical Writer</li>
					<li>Information System Manager</li>
					<li>Database Operator</li>
					 <li>Full-stack Developer (mobile and web)</li>
					<li>Algorithmist</li>
					<li>Cyber Security Expert</li>
					<li>Data Scientist</li>
					<li>Lecturer</li>
				</ul>			
			</div>
		</div><br>
		<div class="row" id="bca8">
			<div class="col-md-12">
				<h4><b>BCA Syllabus and Course Structure</b></h4>
				<hr>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default" >
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse1" style="color:white;">
										<h4 class="panel-title"><span class="glyphicon glyphicon-minus"></span><b>&nbsp;&nbsp;First Semester</b></h4>
									</a>
								</div>
								<div id="bcacollapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS101</td>
													<td style="padding: 5px;">Computer Fundamentals &amp; Applications</td>
													<td style="padding: 5px;">4</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CASO102</td>
													<td style="padding: 5px;">Society and Technology</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAEN103</td>
													<td style="padding: 5px;">English I</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAMT104</td>
													<td style="padding: 5px;">Mathematics I</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS105</td>
													<td style="padding: 5px;">Digital Logic</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;"><strong>Total</strong></td>
													<td></td>
													<td style="padding: 5px;"><strong>16</strong></td>
													</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse2"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Second Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
												<tr>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS151</td>
												<td style="padding: 5px;">C Programming</td>
												<td style="padding: 5px;">4</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CAAC152</td>
												<td style="padding: 5px;">Financial Accounting</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CAEN153</td>
												<td style="padding: 5px;">English II</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CAMT154</td>
												<td style="padding: 5px;">Mathematics II</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS155</td>
												<td style="padding: 5px;">Microprocessor and Computer Architecture</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;"><strong>Total</strong></td>
												<td></td>
												<td style="padding: 5px;"><strong>16</strong></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse3"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Third Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
												<tr>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS201</td>
												<td style="padding: 5px;">Data Structure and Algorithm</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CAST202</td>
												<td style="padding: 5px;">Probability and Statistics</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS203</td>
												<td style="padding: 5px;">System Analysis and Design</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS204</td>
												<td style="padding: 5px;">OOP in Java</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CACS205</td>
												<td style="padding: 5px;">Web Technology</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;"><strong>Total</strong></td>
												<td></td>
												<td style="padding: 5px;"><strong>15</strong></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse4"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fourth Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse4" class="panel-collapse collapse">
									<div class="panel-body">
											<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS251</td>
													<td style="padding: 5px;">Operating System</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS252</td>
													<td style="padding: 5px;">Numerical Methods</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS253</td>
													<td style="padding: 5px;">Software Engineering</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS254</td>
													<td style="padding: 5px;">Scripting Language</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS255</td>
													<td style="padding: 5px;">Database Management System</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAPJ256</td>
													<td style="padding: 5px;">Project I</td>
													<td style="padding: 5px;">2</td>
													</tr>
													<tr>
													<td style="padding: 5px;"><strong>Total</strong></td>
													<td></td>
													<td style="padding: 5px;"><strong>17</strong></td>
													</tr>
												</tbody>
											</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse5"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fifth Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<table border="1" style="width:100%;font-size: 13px;">
												<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS301</td>
													<td style="padding: 5px;">MIS and E-Business</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS302</td>
													<td style="padding: 5px;">DotNet Technology</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS303</td>
													<td style="padding: 5px;">Computer Networking</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAMG304</td>
													<td style="padding: 5px;">Introduction to Management</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS305</td>
													<td style="padding: 5px;">Computer Graphics and Animation</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;"><strong>Total</strong></td>
													<td></td>
													<td style="padding: 5px;"><strong>15</strong></td>
													</tr>
												</tbody>
											</table>
						         		</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse6"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Sixth Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse6" class="panel-collapse collapse">
									<div class="panel-body">
										
											<table border="1" style="width:100%;font-size: 13px;">
												<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS351</td>
													<td style="padding: 5px;">Mobile Programming</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS352</td>
													<td style="padding: 5px;">Distributed System</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAEC353</td>
													<td style="padding: 5px;">Applied Economics</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS354</td>
													<td style="padding: 5px;">Advanced Java Programming</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS355</td>
													<td style="padding: 5px;">Network Programming</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAPJ356</td>
													<td style="padding: 5px;">Project II</td>
													<td style="padding: 5px;">2</td>
													</tr>
													<tr>
													<td style="padding: 5px;"><strong>Total</strong></td>
													<td></td>
													<td style="padding: 5px;"><strong>17</strong></td>
													</tr>
												</tbody>
											</table>
						       			</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse7"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Seventh Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse7" class="panel-collapse collapse">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS401</td>
													<td style="padding: 5px;">Cyber Law and Professional Ethics</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS402</td>
													<td style="padding: 5px;">Cloud Computing</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAIN403</td>
													<td style="padding: 5px;">Internship</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">N/A</td>
													<td style="padding: 5px;">Elective I</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">N/A</td>
													<td style="padding: 5px;">Elective II</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;"><strong>Total</strong></td>
													<td></td>
													<td style="padding: 5px;"><strong>15</strong></td>
													</tr>
												</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse8"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Eighth Semester</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse8" class="panel-collapse collapse">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
												<tr>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
												<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
												</tr>
												<tr>
												<td style="padding: 5px;">CAOR451</td>
												<td style="padding: 5px;">Operation Research</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">CAPJ452</td>
												<td style="padding: 5px;">Project III</td>
												<td style="padding: 5px;">6</td>
												</tr>
												<tr>
												<td style="padding: 5px;">N/A</td>
												<td style="padding: 5px;">Elective III</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;">N/A</td>
												<td style="padding: 5px;">Elective IV</td>
												<td style="padding: 5px;">3</td>
												</tr>
												<tr>
												<td style="padding: 5px;"><strong>Total</strong></td>
												<td></td>
												<td style="padding: 5px;"><strong>15</strong></td>
												</tr>
											</tbody>
										</table>
					              	</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bcacollapse9"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp; List of Electives</b></h4>
										</a>
									
								</div>
								<div id="bcacollapse9" class="panel-collapse collapse">
									<div class="panel-body">
										<table border="1" style="width:100%;font-size: 13px;">
											<tbody>
													<tr>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
													<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
													</tr>
													<tr>
													<td style="padding: 5px;">CAPS476</td>
													<td style="padding: 5px;">Applied Psychology</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS477</td>
													<td style="padding: 5px;">Geographical Information System</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS478</td>
													<td style="padding: 5px;">IT in Banking</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS479</td>
													<td style="padding: 5px;">Hotel Information System</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CAER480</td>
													<td style="padding: 5px;">Enterprise Resource Planning</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS482</td>
													<td style="padding: 5px;">Knowledge Engineering</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS483</td>
													<td style="padding: 5px;">Advanced DotNet Technology</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS484</td>
													<td style="padding: 5px;">Database Programming</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS485</td>
													<td style="padding: 5px;">Database Administration</td>
													<td style="padding: 5px;">3</td>
													</tr>
													<tr>
													<td style="padding: 5px;">CACS486</td>
													<td style="padding: 5px;">Network Administration</td>
													<td style="padding: 5px;">3</td>
													</tr>
											</tbody>
										</table>
					       			</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<h3>Related Courses</h3><hr><br>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12"style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					
					<tr>

						<td style="padding: 5px;">
							<a href="bhm.php">
						<img src="images/programs/bhm.jpg" class="img img-responsive course_margin images"></a>
					</td></tr>

						<tr class="row_color"><td>
							<a href="bhm.php" style="color: black;">
							<h4>BHM</h4>
							<p>TU Affiliated</p></a>
						</td></tr>
					</table>
				</div>
				
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12"style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					<tr>
						<td style="padding: 5px;">
							<a href="bim.php">
						<img src="images/programs/bim.jpg" class="img img-responsive course_margin images"></a>
					</td></tr>
						<tr class="row_color"><td >
							<a href="bim.php" style="color: black;">
							<h4>BIM</h4>
							<p>TU Affiliated</p>
						</a>
						</td></tr>
					</table>
				</div>
				
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12"style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					<tr>
						<td style="padding: 5px;">
							<a href="bbs.php">
						<img src="images/programs/bbs.jpg" class="img course_margin course_margin img-responsive images">
					</a>
					</td></tr>
					<center>
						<tr class="row_color"><td>
							<a href="bbs.php" style="color: black;">
							<h4>BBS </h4>
							<p>TU Affiliated</p>
						</a>
						</td></tr></center>
					</table>
				</div>
				
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12"style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					<tr>
						<td style="padding: 5px;">
							<a href="csit.php">
						<img src="images/programs/csit.jpg" class="img course_margin course_margin img-responsive images">
					</a>
					</td></tr>
					<center>
						<tr class="row_color"><td>
							<a href="csit.php" style="color: black;">
							<h4>BSc. CSIT </h4>
							<p>TU Affiliated</p>
						</a>
						</td></tr></center>
					</table>
				</div>
				
			</div>
			
		</div>
	</div>
	<br><br>
		
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
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
	$('.slide').hiSlide();
</script>
</html>