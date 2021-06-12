<?php
	include('../includes/session_check.php');
?>
<?php
	include('../includes/connect.php');
	include('../includes/profile.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>You searched for &nbsp;<?php echo $_GET['search']; ?></title>
	<style>
		.btn_color{
	background: #006666;
	color:white;
}
th td{
	margin: : 200px;
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
								<a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;"><img onerror="this.onerror=null; this.src='../user/images/Default.jpg'" style="width: 50px;height: 50px;position: absolute;	left: -40px;top:0px;" id="myImg" src="../user/images/<?php echo "$image"; ?>"  class="img img-rounded ok img-responsive images" alt="" >
								<!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->&nbsp;<?php echo$_SESSION['username'] ?><span class="caret"></span></a>
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
			<div  class="col-md-2 side_bar">
				<h3 class="a" style="padding-left: 20px;">Dashboard</h3>
				
				<ul>
					<li><a href="../index.php" class="a">
						<img style="width: 125px;height: 125px;" id="myImg" src="../user/images/<?php echo "$image"; ?>" onerror="this.onerror=null; this.src='../user/images/Default.jpg'" class="img img-circle  img-responsive images" alt="<?php echo"$title"; ?>" >
				<!-- <span class="glyphicon glyphicon-user" style="font-size: 100px;" aria-hidden="true"></span> --><br><p style="font-size: 17px;"><b><i><?php echo$_SESSION['username'] ?></i></b></p></a></li>
					<li><a href="../slider/index.php" >Slider</a></li>
					<li><a href="../gallery/index.php" >Gallery</a></li>
					 <li><a href="index.php" >Post</a></li>
					<li><a href="../user/index.php" >User</a></li>
					 <li><a href="../includes/session_out.php" >Log Out</a></li>
				</ul>
			</div>
			<div  class="col-md-10 content_bar">
				<div style="margin:50px;">
					<a class="btn btn_color" href="add_post.php" type="submit">Add Post</a>&nbsp;&nbsp;&nbsp;
					<a class="btn btn_color" href="index.php" type="submit">Manage Post</a>	
					<a class="btn btn_color" href="user_post.php" type="submit">Unapproved Post</a>	
				</div>
				<div style="margin:50px;" >
					<h2 style="text-align: center;font-style:italic;"><b>Manage Post</b></h2>
					<ul style="float:right">
						<li>
							<form class="navbar-form navbar-left" role="search" action="search.php" method="get">
								<div class="form-group" name="submit">
									<input type="text"  name="search" class="form-control" value="<?php echo $_GET['search']; ?>">
										<!-- <input type="submit" value="search" name="submit"> -->
								</div>
							</form>
						</li>
					</ul>
					<table class="table">
						<thead>
							<tr>
								<th style="text-align: center;">S.N</th>
								<th style="text-align: center;">Title</th>
								<th style="text-align: center;">Author</th>
								<th style="text-align: center;">Date</th>
								<th style="text-align: center;">Image</th>
								<th style="text-align: center;">Content</th>
								<th style="text-align: center;">Action</th>

							</tr>
				
						</thead>
						<tbody>
							<?php
							if (isset($_GET['search'])){
								$search_id = $_GET['search'];
								$query="SELECT * FROM `post` where `status`='approved' AND title like '%$search_id%' or content like '%$search_id%'";
										 // var_dump($query); die();
								$result = $connect->query($query);
								if($result->num_rows>0){
									$i=1;
									while ($row = $result->fetch_assoc()) {
										$id=$row['id'];
										$title=$row['title'];
										$image=$row['image'];
										$content=substr($row['content'],0,400);
										?>
							<tr>
							<td><?php echo$i++ ;?></td>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['author']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><img width="50" height="50"  src="images/<?php echo $row['image'];?>" ></td>
							<td><?php echo substr($row['content'],0,80 ); ?></td>
							<td><a href="edit.php?edit=<?php echo"$id"; ?>">Edit</a> | <a href="delete.php?id=<?php echo"$id"; ?>">Delete</a></td>
							</tr>
							<?php
							}}
							else
							{
								echo"<h2>No Results found.</h2><br><br><br>";
									}
								}
							?>
						</tbody>
					</table>
					
				</div>
			</div>
			</div>
		</div>
		
	</div>
</body>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>