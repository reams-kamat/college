<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style>
		#register_butto_nav:hover{
			background:#003366;
			color:white;
		}

		.date_1{
			background:#0064b2;
			color: white;
			width: 55px;
			height:70px;
			padding: 5px;
		}
		.col-md-8 p {
    font-size: 16px;
    line-height: 1.7;
}	
	.side_bar{
	height: 450px;
	width: 350px;
	/*background-color: #006666;*/
	/*position: fixed;*/
	box-shadow: 0 0px 10px rgba(0,0,0,.2);
    padding: 20px 30px;
    background: #fff;
    margin: 44px 0;
}
.side_bar ul{
	list-style: none;
	margin:0px;
	padding:0px;
	/*color: white;*/
}
/*.side_bar ul a{
	display: block;
	padding: 18px;
	color:aliceblue;
	border-bottom: 1px solid #004044;
}
.side_bar ul a:hover{
	background:#004044; 
	text-decoration: none;
}*/
.widget-title {
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: 600;
}
.sidebar-wrap_li {
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    border-bottom: 1px dashed #ddd;
    margin-bottom: 10px;
    position: relative;
    padding-left: 20px;
}
.sidebar-wrap_li a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    font-weight: 300;
}
.sidebar-wrap_li a:hover{
	text-decoration: none;
}

/*image model */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
  /*background: black;*/
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}


.remove:hover{
  font-size: 40px;
  cursor: pointer;
  color: #ccc;

}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
    height: 100%;
  }
	</style>

	
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
					<div class="right_nav">
						<ul class="nav nav-pills nav navbar-nav navbar-right">
							<li><a href="index.php" class="a">Home</a></li>
							<li class="dropdown">
								<a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs</a>
								<ul class="dropdown-menu">
								<?php include'includes/programs_dropdown.php'; ?>
								</ul>
							</li>
							<li><a href="gallery.php" class="a">Gallery</a></li>
							<li><a class="a" href="notice.php">Notice</a></li>
							<li><a href="about.php"class="a">About</a></li>
							<li><a href="support.php"class="a">Support</a></li>
							<form class="navbar-form navbar-left" role="search" action="search.php" method="get">
								<div class="form-group" name="submit">
									<input type="text"  name="search" class="form-control" value="Search">
									<!-- <input type="submit" value="search" name="submit"> -->
								</div>
							</form>
								<?php	

							include("admin/includes/connect.php");

							// nav change connection
							include('includes/signin_disappear_on_login.php');

							?>				
						</ul>
					</div>

				</nav>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="padding-left: 50px;padding-top: 30px;">
				<div class="side_bar" style="margin-top:  30px;">
					<div>
						<h2 class="widget-title">Recent Posts</h2>
						<?php
							$sql_query="SELECT * FROM `post` order by `id` desc limit 0,6";
							$result = $connect->query($sql_query);
							if($result){
							while ($row = $result->fetch_assoc()) {
								?>
						<ul>
							<li class="sidebar-wrap_li"><span style="font-size: 20px;" class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;<a href="post.php?id=<?php echo($row['id']) ?>"><?php echo $row['title'];?></a></li>
							
						</ul>
						<?php
							}}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-8" style="padding-left: 100px;">
				<?php
				$post_id = $_GET['id'];
				// var_dump($post_id); die();
				$sql_query="SELECT * FROM `post` WHERE `id` = '$post_id'";
				$result = $connect->query($sql_query);
				if($result){
				while ($row = $result->fetch_assoc()) {
					$title=$row['title'];
					$author=$row['author'];
					$image=$row['image'];
					$content=$row['content'];
					$date=$row['date'];
					?>
				<h2 style="color: #0064b2;font-weight: 400;display: block;margin: 30px 0 0;"><?php echo"$title"; ?></h2>
				<img id="myImg" src="admin/post/images/<?php echo "$image"; ?>"  class="img img-responsive images" alt="<?php echo"$title"; ?>" style="width:100%;max-width:300px;margin: 50px;">

				<!-- The Modal -->
				<div id="myModal" class="modal">
				<!--   <span class="close" style="font-size: 40px;font-weight: bold;position: absolute;  top: 20px;  right: 35px;  color: #f1f1f1;  transition: 0.3s;display: block;background: black;">&times;</span> -->
				<span class="glyphicon glyphicon-remove remove" aria-hidden="true" style="font-size: 20px;font-weight: bold;position: absolute;  top: 25px;  right: 35px;  color: #f1f1f1;  transition: 0.3s;"></span>
				  <img class="modal-content" id="img01">
				  <div id="caption"></div>
				</div>
				<ul style="display: flex;list-style-type:  none;padding-left: 50px;">
					<li><p >Published on :&nbsp;&nbsp;<i><?php echo "$date"; ?></i></p></li>
					<li style="padding-left: 100px;"><p><i>Author:<b><?php echo "$author"; ?></b></i></p></li>
				</ul>
				<h3><u>Description:</u></h3>
				<div style="padding:5px 20px  20px 20px">
					<p><?php echo "$content"; ?></p>
				</div>
				<?php
					}		
				}
			?>
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that removes the modal
var span = document.getElementsByClassName("remove")[0];

// When the user clicks on <span> (x), remove the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
	$('.slide').hiSlide();
</script>
</html>
