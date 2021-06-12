<!DOCTYPE html>
<html>
<head>
	<title>BBS</title>
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
						<a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
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
					<li ><a href="about.php" class="a">About</a></li>
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
		<div  class="row " style="background: url(images/home/2.jpg);background-position: center;background-repeat: no-repeat;background-size:cover; height:auto;">
				<div>
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Bachelor of Business Studies</i></h3>
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
							<a href="bbs.php">
								<img src="images/programs/bbs.jpg" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="bbs.php" style="color: black;">
								<h4>BBS </h4>
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
				<p><b>BBS(Bachelor of Business Studies)</b> is a four-year program conducted by the Faculty of Management of Tribhuvan University. The program focuses on business studies and trains students to develop intellectual and interpersonal skills. The profound knowledge of the fields of business and administration gives these students an enormously different and insightful perspective. This degree supplies broad business knowledge and specialist knowledge of a particular business area. Therefore, students will have the opportunity to understand the practical and reality-based skills required to organize and manage organizations of any kind through this course. The program will focus on general management, marketing management, and accounting. </p><p><b>Bachelor of Business Studies </b> incorporates management concepts & reality-based skills integrating them with the latest changes in the business environment. The programme concentrates on specialized areas such as accounting,  finance, human resource management, or marketing. It also builds a foundation in allied areas such as language,  economics, statistics, and law that help students to understand management practices & market needs. Because of the entrepreneurial skills & functional expertise nurtured,  graduates eventually become effective agents of change in society.</p>
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
							<li><a href="#bbs1">Scope of BBS</a></li>
							<li><a href="#bbs2">Mission of BBS Programme</a></li>
							<li><a href="#bbs3">Eligibility Criteria:</a></li>
							<li><a href="#bbs4">WHY BBS AT HIMALAYA DARSHAN ?</a></li>
							<li><a href="#bbs5">Minimum General Requirements:</a></li>
							<li><a href="#bbs6">Graduation Requirements</a></li>
							<li><a href="#bbs7">Attendance, Evaluation and Grading System:</a></li>
							<li><a href="#bbs8">Scope and Career Prospects</a></li>
							<li><a href="#bbs9">BBS SYLLABUS & COURSE STRUCTURE:</a></li>
						</ol>
					</list>
				</div>
			</div>
			
		</div>
		<div class="row" id="bbs1">
			<div class="col-md-12"style="padding: 50px;">
				<h4 ><b>Scope of BBS</b></h4>
				<hr>
				<ul class="desc">
					<li>The BBS program aims to develop students into competent managers in any organized activity sector.</li>
					<li>The program is based on the principle that graduates spend a large part of their lives in an environment that is constantly changing.</li>
					<li>The student should, therefore, have the opportunity to gain a broad understanding of the concepts and realities underlying the operation and management of organizations. Upon graduation, students should be equipped to function as a manager in business, industry and government.</li>
					<li>The graduates should also have a variety of career opportunities in various business sectors, including entrepreneurship, and create jobs that others need.</li>
				</ul>
			</div>
		</div>
		<div class="row" id="bbs2">
			<div class="col-md-12">
				<h4><b>Mission of BBS Programme</b></h4>
				<hr>
				<ul class="desc">
					<li>Provide students with the necessary business and administration conceptual knowledge to develop a general management perspective.</li>
					<li>Develop required attitudes, skills and practical skills in students, which form the basis for their growth as competent and responsible business managers.</li>
					<li>Encourage students ‘ entrepreneurial skills to become effective agents of change in Nepalese society.</li>
					<li>Develop the foundations necessary for higher management studies and then take careers in teaching, research and consulting.</li>
				</ul >
				<br><br>
			</div>
		</div>
		<div class="row" id="bbs3">
			<div class="col-md-12">
				<h4><b>Eligibility Criteria</b></h4>
				<hr>
				<p><i>The candidate applying for Bachelor of Business Studies program must have:</i></p>
				<ul class="desc">
					<li>Must have completed the PCL or 10+2 in Business/Commerce or an equivalent course from HSEB or from any other university/Board.</li>
					<li>Must have scored at least D Plus(D+) in each subject in 10+2.</li>
				</ul>
				
			</div>
		</div>
		<div class="row" id="bbs4">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>WHY BBS AT HIMALAYA DARSHAN ?</b></h4>
				<hr>
				<ul class="desc">
					<li>Our goal is to be a premier institute that provides creativity among students and establish moral values along with quality education, to enable them to take on real-life challenges with confidence.</li>
					<li>Along with having an excellent teaching faculty, We have been able to maintain the standard of being one of the top colleges in the country holding TU Toppers in various fields.</li>
					<li>We help the students in recognizing the challenges of a competitive world and learn to adapt.</li>
					<li>Highly dedicated institution to build in students professional competence in order to acquire positions of leadership.</li>
					<li>Our college has been successful to give an equal opportunity of excellent education to students coming from diverse sections of society.</li>
					<li>We impart in-depth knowledge of business and administration-related fields that gives the students a vastly different and insightful perspective.</li>
					<li>We are totally dedicated in making a brighter life for those who want to specialize in accounting, marketing, or management.</li>
					<br>
					<p>The BBS is a four-year Bachelor Degree program in business.</p>
				</ul>
			</div>
		</div>
		<div class="row" id="bbs5">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Minimum General Requirements</b></h4>
				<hr>
				<p><i>The minimum general requirements for the 4-years BBS programme are as follows:</i></p>
				<ul class="desc">
					<li>An academic year will consist of a minimum of 150 teaching days excluding the days taken for admission and annual examinations.</li>
					<li>The total instructional hours in an academic year will be 615 (150 days x 4:10 hours a day). For courses requiring field and practical works, additional hours of study will be required.</li>
					<li>There will be a minimum of five periods (i.e. class hours) each teaching day. The campuses running morning or evening shifts will also be required to meet this minimum class requirement.</li>
				</ul>
			</div>
		</div>
		<div class="row" id="bbs6">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Graduation Requirements</b></h4>
				<hr>
				<p><i>The BBS programme extends over three academic years and the BBS degree is awarded on its successful completion. All candidates for BBS degree must fulfill the following requirements:</i></p>
				<ul class="desc">
					<li>The successful completion of 2000 marks as prescribed with passing grades in all the courses.</li>
					<li>The passing scores obtained in all theory and practical components of the course separately.</li>
					<li>Completion of courses for the fulfillment of BBS programme must occur within the time limit as prescribed by Tribhuvan University.</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding-top:50px;">
				<h4 id="bbs7"><b>Attendance, Evaluation and Grading System</b></h4>
				<hr>
				<ul class="desc">
					<li>The student must have a minimum of 70 percent attendance of the classes actually held.</li>
					<li>No student will be allowed to appear in the second year final examinations without first appearing in the first year final examinations.</li>
				</ul>
				<h4 style="padding-top: 20px;"><b>BBS GRADING SYSTEM:</b></h4>
				<table border="1" style="width:100%;font-size: 16px;">
					<tr >
							<th colspan="2" style="background:#ff6600;color:white;" >Grading System Percentage:</th>
					</tr>
					<tr>
						<td>Third Division</td><td>35%</td>
					</tr>
					<tr>
						<td>Second Division</td><td>45%</td>
					</tr>
					<tr>
						<td>First Division</td><td>60%</td>
					</tr>
					<tr>
						<td>Distinction</td><td>75% or Above</td>
					</tr>
				
				</table>
			</div>
			<div class="col-md-6" style="padding-top:50px;" id="bbs8">
				<h4><b>Scope and Career Prospects</b></h4>
				<hr>
				<p class="desc1">The BBS program has been converted into four years program from 3 years program. Because of this, it has become the choice of students who want to pursue management comparatively in cheaper rates. The academic cost of BBS compared to other management courses is less. However, when it comes job and career, BBS program has as much possibilities and scope as compared to other subjects in management. From banking to corporate house, factories to account, every where there is a need of BBS graduates. They can work in sales and marketing. Since, it has become four years, it has now become easy for students to go abroad for further study. Not only are this, teaching and training also good fields for BBS graduates. Moreover, it becomes complementary for graduates to get enrolled in higher studies through BBS. </p>
							
			</div>
		</div><br>
		<div class="row" id="bbs9">
					<div class="col-md-12">
						<h4><b>BBS Syllabus and Course Structure</b></h4>
						<hr>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="panel-group" id="accordion">
									<div class="panel panel-default" >
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#bbscollapse1" style="color:white;">
												<h4 class="panel-title"><span class="glyphicon glyphicon-minus"></span><b>&nbsp;&nbsp;First Year</b></h4>
											</a>
										</div>
										<div id="bbscollapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Business English</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Micro Economics</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Statistics</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Principle of Management</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Accounting for financial Analysis</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;"><strong>Total</strong></td>
															<td style="padding: 5px;"><strong>500</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bbscollapse2"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Second Year</b></h4>
												</a>
											
										</div>
										<div id="bbscollapse2" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Communication</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Macro Economics</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Cost and Management Accounting</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Fundamentals of Marketing</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Foundation of Human Resource Management</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;"><strong>Total</strong></td>
															<td style="padding: 5px;"><strong>500</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bbscollapse3"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Third Year</b></h4>
												</a>
											
										</div>
										<div id="bbscollapse3" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Environment and Strategy</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Fundamentals of Financial Management</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Law</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Taxation and Auditing</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Organizational Behaviour</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;"><strong>Total</strong></td>
															<td style="padding: 5px;"><strong>500</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bbscollapse4"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fourth Year</b></h4>
												</a>
											
										</div>
										<div id="bbscollapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Entrepreneurship and Enterprise Development</td>
															<td style="padding: 5px;">100</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Research Methods</td>
															<td style="padding: 5px;">50</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Final Project</td>
															<td style="padding: 5px;">50</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Concentration Area(Any one)</td>
															<td style="padding: 5px;">N/A</td>
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
			<div class="col-md-3 col-sm-6"style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-sm-6"style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-sm-6"style="padding-bottom: 30px;">
				<div>
					<table style="box-shadow: 2px 2px 2px 2px silver;border:0px;">
					<tr>
						<td style="padding: 5px;">
							<a href="bca.php">
						<img src="images/programs/bca.jpg" class="img img-responsive course_margin images">
						</a>
					</td></tr>
						<tr class="row_color"><td>
							<a href="bca.php" style="color: black;">
							<h4>BCA</h4>
							<p>TU Affiliated</p>
							</a>
						</td></tr>
					</table>
				</div>
				
			</div>
			<div class="col-md-3 col-sm-6"style="padding-bottom: 30px;">
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