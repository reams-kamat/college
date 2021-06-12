<?php
	include('../includes/session_check.php');
	include('../includes/connect.php');
	include('../includes/profile.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Photo</title>
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
								<a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;"><img onerror="this.onerror=null; this.src='../user/images/Default.jpg'" style="width: 50px;height: 50px;position: absolute;	left: -40px;top:0px;" id="myImg" src="../user/images/<?php echo "$image"; ?>"  class="img img-rounded ok img-responsive images" alt="" ><!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->&nbsp;<?php echo$_SESSION['username'] ?><span class="caret"></span></a>
								<ul class="dropdown-menu form1">
									<li><a href="../../index.php" >Site</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../../notice.php" >Notices</a></li>
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
						<img style="width: 125px;height: 125px;" id="myImg" src="../user/images/<?php echo "$image"; ?>" onerror="this.onerror=null; this.src='../user/images/Default.jpg'" class="img img-circle  img-responsive images" alt="<?php echo"$title"; ?>" >
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
					<a class="btn btn_color" href="add_photo.php" type="submit">Add Photo</a>&nbsp;&nbsp;&nbsp;
					<a class="btn btn_color" href="index.php" type="submit">Manage Photo</a>		
				</div>

				<div style="margin:50px;" >
					<h2 style="text-align: center;font-style:italic;"><b>Upload Photo</b></h2>
					<?php
					// database connection
					include('../includes/connect.php');
					if (isset($_POST['publish'])) {
						if ( $_POST['content']=='') {
							echo ("<script>alert('Fill all the content Fields')</script>");
							echo "<script>window.open('add_photo.php','_self')</script>";

							exit();
						}
						else{
							$title=$_POST['title'];
							$author=$_POST['author'];
							$content=$_POST['content'];
							$image_name=$_FILES['image']['name'];
							$image_type=$_FILES['image']['type'];
							$image_size=$_FILES['image']['size'];
							$image_tmp=$_FILES['image']['tmp_name'];
							$date=date('y.m.d');

							if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif") {
								if ($image_size<=2000000) {
									move_uploaded_file($image_tmp,"images/$image_name");
									$query="INSERT INTO `gallery`(`title`, `author`,`content`, `image`, `date`) VALUES ('$title','$author','$content','$image_name','$date')";
										$result = $connect->query($query);
										if($result){
											echo "<h4><i> Sucessfully photo uploaded</i></h4>";
										}
										else{
											echo "<h4><i> Failed to upload photo!!! </i></h4>";
										}
								} else {
									echo ("<script>alert('Image sizeless than 2 MB is valid.')</script>");
								}

							} 
							else {
								echo ("<script>alert('Invalid file type.')</script>");
								echo "<h4><i> Failed to upload photo!!! </i></h4>";
							}
						}
						}
					?>
					<form action="add_photo.php" method="POST" name="insert_form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="text" name="title" class="form-control" id="exampleInputtitle1" placeholder="title" required="true">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Author</label>
							<input type="text" name="author" class="form-control" id="exampleInputauthor1" placeholder="author" required="true" readonly value="<?php echo$_SESSION['username'] ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Image</label>
							<input type="file" required="true" name="image" class="form-control" id="exampleInputimage1" placeholder="image">
						</div>		
						<div class="form-group">
							<label for="exampleInputEmail1">Content</label>
							<textarea name="content"  id="content1"></textarea>

						</div>				
						<button type="submit" class="btn btn_color" name="publish">Publish</button>
					</form>
				</div>
			</div>
			</div>
		</div>
		
	</div>
</body>
<!-- CkEditor -->
<script src="ckeditor/ckeditor.js"></script>
<script> 
	ClassicEditor.create(document.getElementById('content1'));
</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>
