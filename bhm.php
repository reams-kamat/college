<!DOCTYPE html>
<html>
<head>
	<title>BHM</title>
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
					<h3 style="padding-left: 100px;padding-top: 5px;"><i>Bachelor of Hotel Management</i></h3>
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
							<a href="bhm.php">
								<img src="images/programs/bhm.jpg" class="img course_margin course_margin img-responsive images">
							</a>
						</td>
					</tr>
					<center>
						<tr class="row_color"><td>
							<a href="bhm.php" style="color: black;">
								<h4>BHM </h4>
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
				<p><b>Bachelor of Hotel Management (BHM)</b> affiliated to Tribhuvan University is a four year( 8 semester) degree course . This course finds its core on hotel and hospitality management to incorporate appropriate skills to students in hotels, restaurants , sales ,tourism industry and entire management . This course provides suitable training and skill development to meet management requirements in Hotel Industry.</p><br>
				<p>The Bachelor of Hotel Management (BHM) programme of Tribhuvan University has been designed to prepare the students to enter the hospitality industry at the supervisory level in area of hotel and catering operations.BHM program of Tribhuvan University is a four year, 8 semester program which is offered in more than 10 Hotel Management colleges of Nepal . Every year the total capacity of enrollment for BHM program of Tribhuvan University  is more than 600.</p>
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
							<li><a href="#bhm1">Mission of studying BHM</a></li>
							<li><a href="#bhm2">Why BHM at Himalaya Darshan College?</a></li>
							<li><a href="#bhm3">Eligibility Criteria:</a></li>
							<li><a href="#bhm4">Admission Criteria:</a></li>
							<li><a href="#bhm5">Job Prospectus:</a></li>
							<li><a href="#bhm6">BHM Syllabus and Course Structure</a></li>
						</ol>
					</list>
				</div>
			</div>
			
		</div>
		<div class="row" id="bhm1">
			<div class="col-md-12"style="padding: 50px;">
				<h4 ><b>Mission of studying BHM</b></h4>
				<hr>
				<p>The mission of the Bachelor in Hotel Management (BHM) program is to:</p>
				<ul class="desc">
					<li>Occupy supervisory positions in the hotel and catering industry with adequate background of management functions.</li>
					<li>Acquire basic technical and social skills for professional handling of hotel and catering operations.</li>
					<li>Apply cost control measures for greater economy and success of business operations.</li>
					<li>Set standards for quality assurance of the services offered to customers.</li>
					<li>Develop positive attitudes towards the trade with greater initiative and self confidence in handling the operations.</li>
					<li>Become a successful entrepreneur in a small/medium size enterprise.</li>
				</ul>
			</div>
		</div>
		<div class="row" id="bhm2">
			<div class="col-md-12">
				<h4><b>Why BHM at Himalaya Darshan College?</b></h4>
				<hr>
				<ul class="desc">
					<li>In addition to an excellent teaching faculty, we have maintained the standard of being one of the top colleges in the country holding TU Toppers in different fields.</li>
					<li>Our college is making a lot of efforts in producing well qualified and practically trained students who happen to be experts in their respective field (BHM in this case).</li>
					<li>The Himalaya Darshan College also prepares their students to be prepared for higher level education after  BHM within and outside the country.</li>
					<li>Furthermore, our college focuses more on developing practical skills, teamwork and creativity through different programs.</li>
					<li>Himalaya Darshan College has a  very well-experienced and qualified team of determined faculty members with more than 20+ years of experience in their respective fields.</li>
				</ul >
				<br><br>
			</div>
		</div>
		<div class="row" id="bhm3">
			<div class="col-md-12">
				<h4><b>Eligibility Criteria:</b></h4>
				<hr>
				<p><i>The candidate applying for Bachelor In Hotel Management program must have:</i></p>
				<ul class="desc">
					<li>Students who have passed 10+2 or equivalent examinations from recognized academic institute with second division (securing 45% and above) or 1.8 CGPA are eligible to enroll in this program.</li><br>
					<p>Must have studied English as a compulsory subject.</p>
				</ul>	
			</div>
		</div>
		<div class="row" id="bhm4">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Admission Criteria:</b></h4>
				<hr>
				<p><i>Candidates seeking admission to BHM course should apply in the prescribed form for entrance test within the stipulated time. The applicants should enclose with the application form, attested copies of</i></p>
				<ul class="desc">
					<li>Certificate and testimonials of all examinations passed.</li>
					<li>Equivalency, Transfer and Character Certificates.</li>
					<li>Two recent passports size photographs.</li>
					<li>Must have secure 40% marks in CMAT exarn conducted by T.U.</li>
				</ul>
				<ul type="desc">
					<p><b>Admission Test</b></p>
						<p>The applicants will be required to sit for an admission test designed to judge their abilities and aptitude for the programme in the following areas:</p>
						<li>Group Discussion</li>
						<li>Personal Interview</li>
				</ul>
			</div>
		</div>
		<div class="row" id="bhm5">
			<div class="col-md-12" style="padding-top:50px;">
				<h4><b>Job Prospectus:</b></h4>
				<hr>
				<ul class="desc">
					<li>Chefs</li>
				</ul>
			</div>
			
		</div><br>
		<div class="row" id="bhm6">
					<div class="col-md-12">
						<h4><b>BHM Syllabus and Course Structure</b></h4>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="panel-group" id="accordion">
									<div class="panel panel-default" >
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse1" style="color:white;">
												<h4 class="panel-title"><span class="glyphicon glyphicon-minus"></span><b>&nbsp;&nbsp;First Semester</b></h4>
											</a>
										</div>
										<div id="bhmcollapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">English</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Principle of Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food Production and Patisserie I</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food and Beverage Service I</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Housekeeping Operation</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse2"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Second Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse2" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Business Communication</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Hotel Accounting</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food Production and Patisserie II</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food and Beverage Service II</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Housekeeping Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse3"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Third Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse3" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Food Science and Nutrition</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Cost and Management Accountancy</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food Production and Patisserie III</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food and Beverage Service III</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Front office Operations</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse4"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fourth Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Human Resource Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Financial Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food Production and Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Food and Beverage Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Front office Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse5"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Fifth Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse5" class="panel-collapse collapse">
												<div class="panel-body">
													<table border="1" style="width:100%;font-size: 13px;">
														<tbody>
															<tr>
																<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
																<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
															</tr>
															<tr>
																<td style="padding: 5px;">Hospitality Marketing and Sales</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">Statistics</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">Economics</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">Fundamentals of Tourism</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">Facility Planning and Management</td>
																<td style="padding: 5px;">3</td>
															</tr>
															<tr>
																<td style="padding: 5px;">Management Information System</td>
																<td style="padding: 5px;">3</td>
															</tr>
														</tbody>
													</table>
								         		</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse6"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Sixth Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse6" class="panel-collapse collapse">
											<div class="panel-body">
												
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Industrial Exposure</td>
															<td style="padding: 5px;">15</td>
														</tr>
													</tbody>
												</table>
								       			</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse7"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Seventh Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse7" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Industrial Exposure</td>
															<td style="padding: 5px;">9</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Project work</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Internship Report</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse8"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp;Eighth Semester</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse8" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Credit Hours</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Legal environment for hospitality</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Strategic Management</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Entrepreneurship for Hospitality</td>
															<td style="padding: 5px;">3</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Nepalese Society and Politics</td>
															<td style="padding: 5px;">3</td>
														</tr>
													</tbody>
												</table>
							              	</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" style="color:white;background: #3498db;width:100%;height:100%;">
											
												<a class="accordion-toggle" style="color:white;" data-toggle="collapse" data-parent="#accordion" href="#bhmcollapse9"><h4 class="panel-title">
													<span class="glyphicon glyphicon-plus"></span><b>&nbsp;&nbsp; List of Electives</b></h4>
												</a>
											
										</div>
										<div id="bhmcollapse9" class="panel-collapse collapse">
											<div class="panel-body">
												<table border="1" style="width:100%;font-size: 13px;">
													<tbody>
														<tr>
															<th style="background-color: #f36f21; color: white; padding: 5px;">Course Title</th>
														</tr>
														<tr>
															<td style="padding: 5px;">Cultural Resources of Tourism in Nepal</td>
														</tr>
														<tr>
															<td style="padding: 5px;">Quality Management</td>
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
			<div class="col-md-3 col-sm-6 "style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-sm-6 "style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-sm-6 "style="padding-bottom: 30px;">
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
			<div class="col-md-3 col-sm-6 "style="padding-bottom: 30px;">
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