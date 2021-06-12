<!DOCTYPE html>
<html>
<head>
	<title>BIM</title>
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
		.desc2>li{
			font-weight: bold;
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
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Bachelor of Information Management</i></h3>
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
							<a href="bim.php">
								<img src="images/programs/bim.jpg" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="bim.php" style="color: black;">
								<h4>BIM </h4>
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
				<p><b>Bachelor of Information Management (BIM)</b> is a four year (eight semester) degree affiliated to Tribhuvan University (TU) offering an integrated IT and Management courses. The main objective of this degree is to prepare IT professional and proficient in the use of computer and computational technique in order to develop effective information system to solve real life problem in the organizational field.</p>
				<p>Information Management is the study of information and communication systems in business and administration, and is becoming increasingly relevant to other fields as well. Information Management includes development and application of theories, ideas, models, methods, and tools in order to analyze, configure, and use information systems.</p>
				<p>Information Management relies on approaches used in business administration, economics, and computer science; it integrates these and supplements them with approaches that are specific to this subject area. The program is interdisciplinary in nature and courses are borrowed from many different disciplines like Management, Economics, Computer Science, Psychology and Sociology.</p>
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
							<li><a href="#bim1">Objective of the Program</a></li>
							<li><a href="#bim2">Why BIM at Himalaya Darshan College?</a></li>
							<li><a href="#bim3">BIM Eligibility Criteria:</a></li>
							<li><a href="#bim4">BIM Admission Criteria:</a></li>
							<li><a href="#bim5">Sailent Features:</a></li>
							<li><a href="#bim6">BIM CREDIT HOURS:</a></li>
							<li><a href="#bim7">BIM GRADING SYSTEM::</a></li>
							<li><a href="#bim8">Job Prospectus:</a></li>
							<li><a href="#bim9">BIM Syllabus and Course Structure</a></li>

						</ol>
					</list>
				</div>
			</div>
			<div class="col-md-6" id="bim1">
				<h4><b>Objective of the Program</b></h4>
				<hr>
				<p>The mission of this program is to develop socially responsible, scientifically approached and result oriented information technology (IT) professionals. The specific objectives of the program are to:</p>
				<ul class="desc">
					<li>
						Prepare IT professionals proficient in the use of computers and computational techniques in order to develop effective information systems to solve real life problems in the organizational milieu.</li>
						<li>Develop students’ skill in object-oriented software design methods and data management systems.</li>
						<li>Provide professional training to students by combining information technology with managerial skills.</li>
						<li>Prepare students to proceed on to post graduate level study in information management within and outside the country.</li>
				</ul>
			</div>
			
		</div>
		<div class="row" id="bim2">
			<div class="col-md-12">
				<h4><b>Why BIM at Himalaya Darshan College?</b></h4>
				<hr>
				<ul class="desc">
					<li>Himalaya Darshan College BIM program has been taking up a lot of efforts in producing qualified and educated students who are bound to be experts in software designing along with those students who have a sound knowledge of financial management issues.</li>
					<li>Develop students’ skill in object-oriented software design methods and data management systems.</li>
					<li>Prepare students to proceed on to postgraduate level study in information management within and outside the country.</li>
					<li>Himalaya Darshan college emphasizes a lot on developing practical skills, teamwork, and creativity through various programs.</li>
					<li>A student who has partially completed the BIM program and would like to discontinue his/her studies shall also be allowed to withdraw from the program.	</li>
				</ul >
				<br><br>
			</div>
		</div>
		<div class="row" id="bim3">
			<div class="col-md-12">
				<h4><b>BIM Eligibility Criteria:</b></h4>
				<hr>
				<p><i>The candidate applying for BIM program must have:</i></p>
				<ul class="desc">
					<li>Successfully completed a twelve-year schooling (10+2) or equivalent from any University, Board or Institution recognized by Tribhuvan University.</li>
					<li>Secured a minimum of second division (45%) or minimum C grade in all subjects in the twelve-year schooling or equivalent.</li>
				</ul>
				
			</div>
		</div>
		<div class="row" id="bim4">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>BIM Admission Criteria:</b></h4>
				<hr>
				<ul class="desc">
					<li>Admission of eligible candidate will be on the basis of score obtained on CMAT test conducted by Tribhuvan University and performance in personal interview.</li>
				</ul>
				<br><br>
			</div>
		</div>
		<div class="row" id="bim5">
			<div class="col-md-12">
				<h3><b>Salient Features:</b></h3>
				<hr>
				<ul class="desc1 desc2">
					<li>Teaching Pedagogy</li><p>The general teaching pedagogy includes class lectures, group discussions, case studies, guest lectures, role play, research work, project work (individual and group), assignments (theoretical and practical), and term papers. The teaching faculty will determine the choice of teaching pedagogy as per the need of the course. The concerned faculty shall develop a detailed course outline and work plan at the beginning of each semester and also recommends the basic text and other reference materials for effective teaching-learning of the course modules.</p>
					<li>Internship: Industrial Attachment Project</li><p>In the final semester, students shall be attached to organizations where they have to work for a period of eight weeks. Each student shall prepare an individual project report in the prescribed format based on his / her work in the respective organization assigned to him / her. Evaluation of the internship shall be based on the confidential report by the organization, project report and presentation of the report. The report must be submitted by the end of the eighth semester. Students must secure a minimum grade of “C” in the internship. The internship carries a weight equivalent to 6 credit hours.</p>
					<li>Examination, Evaluation and Grading System</li><p>The BIM program will be executed through the semester system. The regular program shall be completed in eight semesters. The internal (ongoing) evaluation and the external (end of semester) examination shall carry 40 percent and 60 percent weightage respectively. The semester examinations shall be conducted by FOM. The final grade of the student shall be determined on the overall performance in the internal and external examinations.</p>
					<li>Attendance</li><p>Students are required to attend regularly all theory and practical classes, assignments, study tour, field trip, seminars and presentations as required by the course. A student is required to attend at least 80 percent of such activities in order to qualify for the semester examination.</p>
					<li>Credit Transfers and Withdrawl</li><p>The program allows students to transfer the credits earned by them in similar program of other universities recognized by Tribhuvan University. A student who has partially completed the BIM program and would like to discontinue his / her studies shall also be allowed to withdraw from the program. In such cases, a certificate specifying the credit earned by the student in the program shall be provided.</p>
					<li>Graduation Requirements</li><p>The BIM program extends over eight semesters (four academic years). The BIM degree is awarded upon its successful completion of all the following requirements specified by the curriculum. The successful completion of 126 credit hours as prescribed with a minimum of passing grade in all courses with an aggregate CGPA of 2.00. A minimum of grade ‘C’ obtained in the Industrial Attachment Project. Completion of courses for the fulfillment of the requirements of the BIM program must occur within seven years from the time of registration.</p>
				</ul>
				<br><br>
			</div>			
		</div>
		<div class="row">
			<div class="col-md-6" style="padding-top:50px;">
				<h4 id="bim6"><b>BIM CREDIT HOURS:</b></h4>
				<hr>
				<p><i>Bachelor of Information Management (BIM)  Course Structure:</i></p>
				<table border="1" style="width:100%;font-size: 16px;">
					<tr >
							<th colspan="2" style="background:#ff6600;color:white;" >Course Structure:</th>
					</tr>
					
					<tr>
						<td>Information Technology and Computing courses</td><td>60 credit hours</td>
					</tr>
					<tr>
						<td>Management Courses</td><td>27 credit hours</td>
					</tr>
					<tr>
						<td>Analytical and support courses</td><td>27 credit hours</td>
					</tr>
					<tr>
						<td>Elective courses</td><td>6 credit hours</td>
					</tr>
					<tr>
						<td>Internship</td><td>6 credit hours</td>
					</tr>
					<tr>
						<th>Total Credit hours</th><th>	126</th>
					</tr>
				</table>
				<h4 style="padding-top: 20px;" id="bim7"><b>BIM GRADING SYSTEM:</b></h4>
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
			<div class="col-md-6" style="padding-top:50px;" id="bim8">
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
		<div class="row" id="bim9">
					<div class="col-md-12">
						<h4><b>BIM Syllabus and Course Structure</b></h4>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="panel-group" id="accordion">
									<div class="panel panel-default" >
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse1" style="color:white;">
												<h4 class="panel-title"><span class="glyphicon glyphicon-minus"></span><b>&nbsp;&nbsp;First Semester</b></h4>
											</a>
										</div>
										<div id="bimcollapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT201</td>
															<td style="padding: 5px;">Principles of Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">ENG201</td>
															<td style="padding: 5px;">English Composition</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MTH201</td>
															<td style="padding: 5px;">Basic Mathematics</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT211</td>
															<td style="padding: 5px;">Computer Information System</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT212</td>
															<td style="padding: 5px;">Digital Logic</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse2"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Second Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse2" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">SOC201</td>
															<td style="padding: 5px;">Sociology for Business</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MTH202</td>
															<td style="padding: 5px;">Discrete Mathematics</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT204</td>
															<td style="padding: 5px;">Business Communications</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT213</td>
															<td style="padding: 5px;">Structured Programming</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT214</td>
															<td style="padding: 5px;">Data Communication and Computer Network</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse3"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Third Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse3" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">ACC201</td>
															<td style="padding: 5px;">Financial Accounting</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT215</td>
															<td style="padding: 5px;">Web Technology I</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT216</td>
															<td style="padding: 5px;">Java Programming I</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT217</td>
															<td style="padding: 5px;">Computer Organization</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">STT201</td>
															<td style="padding: 5px;">Business Statistics</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse4"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fourth Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">ACC202</td>
															<td style="padding: 5px;">Cost and Management Accounting</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">ECO201</td>
															<td style="padding: 5px;">Microeconomics</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT218</td>
															<td style="padding: 5px;">Data Structure and Algorithm with Java</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT219</td>
															<td style="padding: 5px;">Web Technology II</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT220</td>
															<td style="padding: 5px;">Database Management System</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse5"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fifth Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse5" class="panel-collapse collapse">
												<div class="panel-body">
													<table border="1" style="width:100%;font-size: 13px;">
														<tbody>
															<tr>
																<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
																<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
																<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
															</tr>
															<tr>
																<td style="padding: 5px;">MKT201</td>
																<td style="padding: 5px;">Fundamentals of Marketing</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">ECO202</td>
																<td style="padding: 5px;">Macroeconomics</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">IT221</td>
																<td style="padding: 5px;">Computer Graphics</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">IT222</td>
																<td style="padding: 5px;">Java Programming II</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">IT223</td>
																<td style="padding: 5px;">Advanced Internetworking</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse6"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Sixth Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse6" class="panel-collapse collapse">
											<div class="panel-body">
												
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">FIN201</td>
															<td style="padding: 5px;">Business Finance</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT202</td>
															<td style="padding: 5px;">Human Resource Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT206</td>
															<td style="padding: 5px;">Business Environment in Nepal</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT224</td>
															<td style="padding: 5px;">Software Engineering</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT225</td>
															<td style="padding: 5px;">Computer Security and Cyber Law</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT351</td>
															<td style="padding: 5px;">Summer Project</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;"><strong>Total</strong></td>
															<td></td>
															<td style="padding: 5px;"><strong>18</strong></td>
														</tr>
													</tbody>
												</table>
								       			</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse7"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Seventh Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse7" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT203</td>
															<td style="padding: 5px;">Organizational Behavior</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT205</td>
															<td style="padding: 5px;">Operations Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">MGT208</td>
															<td style="padding: 5px;">Business Strategy</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT226</td>
															<td style="padding: 5px;">Management Information System</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT227</td>
															<td style="padding: 5px;">Object Oriented Analysis and Design</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT228</td>
															<td style="padding: 5px;">Artificial Intelligence</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;"><strong>Total</strong></td>
															<td></td>
															<td style="padding: 5px;"><strong>18</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse8"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Eighth Semester</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse8" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">IT229</td>
															<td style="padding: 5px;">IT Entrepreneurship and Supply Chain Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT230</td>
															<td style="padding: 5px;">Economics of Information and Communication</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT350</td>
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
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bimcollapse9"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp; List of Electives</b></h4>
												</a>
											
										</div>
										<div id="bimcollapse9" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Code</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
														</tr>
														<tr>
															<td style="padding: 5px;">IT305</td>
															<td style="padding: 5px;">Object Oriented Database Management</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT306</td>
															<td style="padding: 5px;">Software Project Management</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT307</td>
															<td style="padding: 5px;">Operating Systems</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT308</td>
															<td style="padding: 5px;">Data Mining and Data Warehousing</td>
														</tr>
														<tr>
															<td style="padding: 5px;">IT309</td>
															<td style="padding: 5px;">Client Server Computing</td>
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