<!DOCTYPE html>
<html>
<head>
	<title>BSc. CSIT</title>
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
/*@media screen and (max-width: 315px){
	.panel-body ow{
		width: 50px;
		background: red;
		font-size: 10px;
		/*margin-left: 0px;*/
	}
}*/

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
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Bachelors in Computer Science and Information Technology</i></h3>
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
							<a href="csit.php">
								<img src="images/programs/csit.jpg" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="csit.php" style="color: black;">
								<h4>BSc. CSIT </h4>
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
				<p><b>BSc. CSIT (Bachelors in Computer Science and Information Technology)</b> is a four years Eight Semesters Undergraduate Degree affiliated to Tribhuvan University (TU) which is designed to provide the student with all sorts of knowledge in the field of Information Technology, Networking, Artificial Intelligence, Computing, Database, Programming, Software Development, Data Structure & Algorithm.</p>
				<p>Himalaya Darshan college one of the top IT college in Biratnagar which is preferred by students searching for affordable best BSc.CSIT College in Nepal. It is the college not only having the professional team of teachers but also facilitates for the students that encourage students to study and aims for the bright future. The college focus on standard Qualitative Education. The BSc.CSIT degree of Himalaya Darshanl college is famous globally due to the teachers who give the theoretical and practical knowledge required by a CSIT student and could sustain worth in the professional world thus making the college one of the top BSc CSIT Colleges in Nepal.</p></div>
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
							<li><a href="#csit1">Why study BSc.CSIT at HIMALAYA DARSHAN ?</a></li>
							<li><a href="#csit2">CSIT Eligibility Criteria:</a></li>
							<li><a href="#csit3">CSIT ADMISSION PROCESS:</a></li>
							<li><a href="#csit4">Salient Features:</a></li>
							<li><a href="#csit5">BSc CSIT CREDITS HOURS:</a></li>
							<li><a href="#csit6">BSc.CSIT GRADING SYSTEM:</a></li>
							<li><a href="#csit7">Job prospectus:</a></li>
							<li><a href="#csit8">BSc CSIT NEW (074/75) SYLLABUS & COURSE STRUCTURE:</a></li>

						</ol>
					</list>
				</div>
			</div>
			
		</div>
		<div class="row" id="csit1">
			<div class="col-md-12"style="padding: 50px;">
				<h4 ><b>Why study BSc.CSIT at HIMALAYA DARSHAN ?</b></h4>
				<hr>
				<ul class="desc">
					<li>Himalaya Darshan College provides its students with a combination of leading-edge theory and technical knowledge plus hands-on practical experience to prepare our students for a successful career as an IT professional in Nepal and around the world.</li>
					<li>Besides curricula designed by the University, Himalya Darshan College will also teach students soft skills, problem-solving skills, critical thinking, and industry relevant additional IT courses.</li>
					<li>As one of the top BSc IT Colleges in Nepal, the college provides an innovative and practical approach to teaching and learning by providing well-equipped laboratories, learning materials, resourceful library, etc.</li>
					<li>The college, in fact, is committed to helping students develop skills, knowledge, and attitudes that help them pursue opportunities in IT and Computing.</li>
					<li>The Himalaya Darshan college organizes a variety of workshops and seminars to upgrade students’ know-how about Computer Science with a special focus on IT.</li>
					<li>Himalaya Darshan college provides students with ample opportunities to integrate their coursework knowledge with professional applications through project work & research.</li>
					<li>The Himalaya Darshan college owns a well-equipped computer lab with the latest technology and offers audiovisual facilities for easy Learning.</li>
					<li>The Himalaya Darshan college provides modern computer facilities with high bandwidth internet access to provide real-world experience.</li>
					<li>The goal of the college is to provide a high-quality education that will enable the students to embrace the challenges of the modern world.</li>
					<li>Himalaya Darshan college main focus is primarily on the intellectual development and academic excellence.</li>
				</ul>
			</div>
		</div>
		<div class="row" id="csit2">
			<div class="col-md-12">
				<h4><b>CSIT Eligibility Criteria:</b></h4>
				<hr>
				<p style="font-size: 15px;"><i>The candidate applying for BSc CSIT program must have:</i></p>
				<ol type="1"  class="desc">
					<li>Should have successfully completed a twelve year of schooling in the science stream or equivalent from any university, board or institution recognized by TU.</li>
					<li>Should have secured a minimum of second division in their +2 or equivalent OR should have secured at least C in all subjects in Grade 11 and Grade 12  by taking Physics and Mathematics of 100 marks.</li>
					<li>Passed A level in Science (have studied Physics and Mathematics of 100 marks) and passed at least in D Grade.</li>
					<li>Passed 3 Years Diploma in Engineering program from CTEVT taking both Physics and Mathematics.</li>
				</ol >
				<p style="font-size: 15px;">Should have successfully passed the entrance examination conducted by TU securing at least 35% marks. Compiled with all the application procedures.</p>
				<p style="font-size: 15px;">(Note: Both Biology and Mathematics group of students of +2 level are eligible to apply for the course)</p>
				<br><br>
			</div>
		</div>
		<div class="row" id="csit3">
			<div class="col-md-12">
				<h4><b>CSIT ADMISSION PROCESS:</b></h4>
				<hr>
				<p class="desc1">In order to get admission in the CSIT program, a student should fill up the Entrance Application Form from any of the Affiliated or Constituent Colleges offering CSIT course and should pass the Entrance Examination conducted by Institute of Science and Technology (IOST), TU and then can get the admission at the respective colleges.</p><p class="desc1">Note: TU Entrance Examination Application forms are available at all colleges that offer BSc CSIT.
				</p>
				
			</div>
		</div>
		<div class="row" id="csit4">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Salient Features:</b></h4>
				<hr>
				<ul class="desc">
					<li>In addition to conventional lectures, a great deal of practical and project works.</li>
					<li>Develops the underlying principles of both Computer Science and Information Technology and shows how these principles can be applied to solve real world problems.</li>
					<li>Builds up the skills that are essential for both computer professionals and researchers including IT managers, Systems Analysts, Network Administrator, Computer Programmers, Database Administrator, Web Developers, etc.</li>
					<li>Semester based program affiliated to Tribhuvan University.</li>
				</ul>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding-top:50px;">
				<h4 id="csit5"><b>BSc. CSIT CREDITS HOURS:</b></h4>
				<p><i>There are eight semesters with 126 credit hours. This program comprises of the following courses:</i></p>
				<table border="1" style="width:100%;font-size: 16px;">
					<tr >
							<th colspan="2" style="background:#ff6600;color:white;" >Course Structure:</th>
					</tr>
					<tr>
						<td>Computer science core courses</td><td>	75 credit hours</td>
					</tr>
					<tr>
						<td>Natural science elective courses</td><td>	6 credit hours</td>
					</tr>
					<tr>
						<td>Mathematics courses	</td><td>12 credit hours</td>
					</tr>
					<tr>
						<td>English courses</td><td>	3 credit hours</td>
					</tr>
					<tr>
						<td>Social science and management courses</td><td>	6 credit hours</td>
					</tr>
					<tr>
						<td>Computer science elective courses</td>	<td>15 credit hours</td>
					</tr>
					<tr>
						<td>Internship/Project</td><td>	9 credit hours</td>
					</tr>
					<tr>
						<th>Total Credit hours</th><th>	126</th>
					</tr>
				</table>
				<h4 style="padding-top: 20px;" id="csit6"><b>BSc.CSIT GRADING SYSTEM:</b></h4>
				<table border="1" style="width:100%;font-size: 16px;">
					<tr >
							<th colspan="2" style="background:#ff6600;color:white;" >Grading System Percentage:</th>
					</tr>
					<tr>
						<td>Pass Division</td><td>40%</td>
					</tr>
					<tr>
						<td>Second Division</td><td>55%</td>
					</tr>
					<tr>
						<td>First Division</td><td>70%</td>
					</tr>
					<tr>
						<td>Distinction</td><td>80% or Above</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6" style="padding-top:50px;" id="csit7">
				<h4><b>Job Prospectus:</b></h4>
				<hr>
				<p><i style="font-size: 15px;">The B.Sc. CSIT graduates have a prosperous career opportunity at different government, non-government, private and public organizations, like software companies, telecommunications, computer networking companies etc. especially as a:</i></p>
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
		</div>
		<div class="row" id="csit8">
			<div class="col-md-12 ow">
				<h4><b>BSc CSIT NEW (074/75) SYLLABUS & COURSE STRUCTURE:</b></h4>
				<hr>
				<div class="row syllabus">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default" >
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse1" style="color:white;">
										<h4 class="panel-title"><span class="glyphicon glyphicon-minus"></span><b>&nbsp;&nbsp;First Semester</b></h4>
									</a>
								</div>
								<div id="csitcollapse1" class="panel-collapse collapse in">
									<div class="panel-body ow">
										<table border="1" style="width:100%;">
						                      <tr style="background:#ff6600;color:white;font-size: 17px;">
						                        <th>Course Code</th>
						                        <th>Course Title</th>
						                        <th>Credit Hours</th>
						                        <th>Full Marks</th>
						                      </tr>
						                      <tr>
						                        <td>CSC309</td><td> Introduction to Information Technology</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC310</td><td> C Programming</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC311</td><td> Digital Logic</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>MTH312</td><td> Mathematics I</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>PHY313</td><td> Physics</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr style="font-size: 17px;">
						                        <th colspan="2">Total</th><th>15</th><th>500</th>
						                      </tr>
						                  </table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse2"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Second Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse2" class="panel-collapse collapse">
									<div class="panel-body ow">
										<table border="1" style="width:100%;font-size: 13px;">
					                      <tr style="background:#ff6600;color:white;font-size: 17px;">
					                        <th>Course Code</th>
					                        <th>Course Title</th>
					                        <th>Credit Hours</th>
					                        <th>Full Marks</th>
					                      </tr>
					                      <tr>
					                        <td>CSC160</td><td> Discrete Structure</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC161</td><td> Object Oriented Programming</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC162</td><td> Microprocessor</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>MTH163</td><td> Mathematics II</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>STA164</td><td> Statistics I</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr style="font-size: 17px;">
					                        <th colspan="2">Total</th><th>15</th><th>500</th>
					                      </tr>

					                    </table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse3"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Third Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse3" class="panel-collapse collapse">
									<div class="panel-body ow">
										<table border="1" style="width:100%;font-size: 13px;">
					                      <tr style="background:#ff6600;color:white;font-size: 17px;">
					                        <th>Course Code</th>
					                        <th>Course Title</th>
					                        <th>Credit Hours</th>
					                        <th>Full Marks</th>
					                      </tr>
					                      <tr>
					                        <td>CSC206</td><td>Data Structure and Algorithms </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC207</td><td>Numerical Method </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC208</td><td>Computer Architecture </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC209</td><td>Computer Graphics </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>STA210</td><td>Statistics II</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr style="font-size: 17px;">
					                        <th colspan="2">Total</th><th>15</th><th>500</th>
					                      </tr>

					                    </table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse4"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fourth Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse4" class="panel-collapse collapse">
									<div class="panel-body ow">
										<table border="1" style="width:100%;font-size: 13px;">
					                      <tr style="background:#ff6600;color:white;font-size: 17px;">
					                        <th>Course Code</th>
					                        <th>Course Title</th>
					                        <th>Credit Hours</th>
					                        <th>Full Marks</th>
					                      </tr>
					                      <tr>
					                        <td>CSC257</td><td>	Theory of Computation </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC258</td><td>Computer Networks </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC259</td><td>Operating Systems </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC260</td><td>Database Management System </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC261</td><td>	Artificial Intelligence</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr style="font-size: 17px;">
					                        <th colspan="2">Total</th><th>15</th><th>500</th>
					                      </tr>

					                    </table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse5"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fifth Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse5" class="panel-collapse collapse">
										<div class="panel-body ow">
											<table border="1" style="width:100%;font-size: 13px;">
						                      <tr style="background:#ff6600;color:white;font-size: 17px;">
						                        <th>Course Code</th>
						                        <th>Course Title</th>
						                        <th>Credit Hours</th>
						                        <th>Full Marks</th>
						                      </tr>
						                      <tr>
						                        <td>CSC314</td><td>	Design and Analysis of Algorithms</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC315</td><td>System Analysis and Design</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC316</td><td>	Cryptography</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC317</td><td>	Simulation and Modeling</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC318</td><td>	Web Technology</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td></td><td> Elective I</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr style="font-size: 17px;">
						                        <th colspan="2">Total</th><th>18</th><th>600</th>
						                      </tr>

						                    </table>
						                    <h4><b>List of Electives:</b></h4>
						                    <ol class="desc">
						                    	<li>Multimedia Computing (CSC319)</li>
						                    	<li>Wireless Networking (CSC320)</li>
						                    	<li>Image Processing (CSC321)</li>
						                    	<li>Knowledge Management (CSC322)</li>
						                    	<li>Society and Ethics in Information Technology (CSC323)</li>
						                    	<li>Microprocessor Based Design (CSC324)</li>
						                    </ol>
										</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse6"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Sixth Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse6" class="panel-collapse collapse">
									<div class="panel-body ow">
										
											<table border="1" style="width:100%;font-size: 13px;">
						                      <tr style="background:#ff6600;color:white;font-size: 17px;">
						                        <th>Course Code</th>
						                        <th>Course Title</th>
						                        <th>Credit Hours</th>
						                        <th>Full Marks</th>
						                      </tr>
						                      <tr>
						                        <td>CSC364</td><td>	Software Engineering</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC365</td><td>Complier Design and Construction</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC366</td><td>	E-Governance</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC367</td><td>	NET Centric Computing</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td>CSC368</td><td>	Technical Writing</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr>
						                        <td></td><td> Elective II</td><td>3</td><td>100</td>
						                      </tr>
						                      <tr style="font-size: 17px;">
						                        <th colspan="2">Total</th><th>18</th><th>600</th>
						                      </tr>

						                    </table>
						                    <h4><b>List of Electives:</b></h4>
						                    <ol class="desc">
						                    	<li>Applied Logic (CSC369)</li>
						                    	<li>E-commerce (CSC370)</li>
						                    	<li>Automation and Robotics (CSC371)</li>
						                    	<li>Neural Networks (CSC372)</li>
						                    	<li>Computer Hardware Design (CSC373)</li>
						                    	<li>Cognitive Science (CSC374)</li>
						                    </ol>
										
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse7"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Seventh Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse7" class="panel-collapse collapse">
									<div class="panel-body ow">
										<table border="1" style="width:100%;font-size: 13px;">
					                      <tr style="background:#ff6600;color:white;font-size: 17px;">
					                        <th>Course Code</th>
					                        <th>Course Title</th>
					                        <th>Credit Hours</th>
					                        <th>Full Marks</th>
					                      </tr>
					                      <tr>
					                        <td>CSC409</td><td>Advanced Java Programming</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC410</td><td>Data Warehousing and Data Mining</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>MGT411</td><td>Principles of Management</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC412</td><td>	Project Work </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td></td><td>Elective III</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr style="font-size: 17px;">
					                        <th colspan="2">Total</th><th>15</th><th>500</th>
					                      </tr>
									 </table>
					                 <h4><b>List of Electives:</b></h4>
									 <ol class="desc">
						                    	<li>Information Retrieval (CSC413)</li>
						                    	<li>Database Administration (CSC414)</li>
						                    	<li>Software Project Management (CSC415)</li>
						                    	<li>Network Security (CSC416)</li>
						                    	<li>Digital System Design (CSC417)</li>
						                    	<li>International Marketing (MGT418)</li>
						                    </ol>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
									
										<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#csitcollapse8"><h4 class="panel-title">
											<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Eighth Semester</b></h4>
										</a>
									
								</div>
								<div id="csitcollapse8" class="panel-collapse collapse">
									<div class="panel-body ow">
										<table border="1" style="width:100%;font-size: 13px;">
					                      <tr style="background:#ff6600;color:white;font-size: 17px;">
					                        <th>Course Code</th>
					                        <th>Course Title</th>
					                        <th>Credit Hours</th>
					                        <th>Full Marks</th>
					                      </tr>
					                      <tr>
					                        <td>CSC461</td><td>Advanced Database</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td>CSC462</td><td>Internship </td><td>6</td><td>200</td>
					                      </tr>
					                      <tr>
					                        <td></td><td>Elective IV </td><td>3</td><td>100</td>
					                      </tr>
					                      <tr>
					                        <td></td><td>Elective V</td><td>3</td><td>100</td>
					                      </tr>
					                      <tr style="font-size: 17px;">
					                        <th colspan="2">Total</th><th>15</th><th>500</th>
					                      </tr>

					                    </table>
					                    <h4><b>List of Electives:</b></h4>
									 <ol class="desc">
						                    	<li>Advanced Networking with IPV6 (CSC463)</li>
						                    	<li>Distributed Networking (CSC464)</li>
						                    	<li>Game Technology (CSC465)</li>
						                    	<li>Distributed and Object Oriented Database (CSC466)</li>
						                    	<li>Introduction to Cloud Computing (CSC467)</li>
						                    	<li>Geographical Information System (CSC468)</li>
						                    	<li>Decision Support System and Expert System (CSC469)</li>
						                    	<li>Mobile Application Development (CSC470)</li>
						                    	<li>Real Time Systems (CSC471)</li>
						                    	<li>Network and System Administration (CSC472)</li>
						                    	<li>Embedded Systems Programming (CSC473)</li>
						                    	<li>International Business Management (MGT474)</li>
						                    </ol>
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
			<div class="col-md-3 col-xs-12 col-sm-6"style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-xs-12 col-sm-6" style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-xs-12 col-sm-6" style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-xs-12 col-sm-6" style="padding-bottom: 30px;">
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
		</div>
	</div>
		
	</div>
	<br><br>
		
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
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
	$('.slide').hiSlide();
</script>
</html>