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
	<title>Manage Slider Image</title>
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
			<div  class="col-md-2 side_bar">
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
					<a class="btn btn_color" href="add_photo.php" type="submit">Add Slider Image</a>&nbsp;&nbsp;&nbsp;
					<a class="btn btn_color" href="index.php" type="submit">Manage Slider Image</a>	
						
				</div>
				<div style="margin:50px;" >
					<h2 style="text-align: center;font-style:italic;"><b>Manage Slider Image</b></h2>
					<ul style="float:right">
						<li>
							<form class="navbar-form navbar-left" role="search" action="search.php" method="get">
								<div class="form-group" name="submit">
									<input type="text"  name="search" class="form-control" value="Search">
										<!-- <input type="submit" value="search" name="submit"> -->
								</div>
							</form>
						</li>
					</ul>
					<table class="table">
						<thead>
							<tr>
								<th>S.N</th>
								<th>Title</th>
								<th>Author</th>
								<th>Content</th>
								<th>Date</th>
								<th>Image</th>
								<th>Action</th>

							</tr>
				
						</thead>
						<tbody>
							<?php
						if (isset($_GET['page_no']) && $_GET['page_no']!="") {
							$page_no = $_GET['page_no'];
							} else {
								$page_no = 1;
						        }

							$total_records_per_page = 10;
						    $offset = ($page_no-1) * $total_records_per_page;
							$previous_page = $page_no - 1;
							$next_page = $page_no + 1;
							$adjacents = "2"; 

							$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `slider`");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
						    $total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1; // total page minus 1

						    $result = mysqli_query($connect,"SELECT * FROM `slider` order by 1 desc LIMIT $offset, $total_records_per_page");
						    $i=1;
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$title=$row['title'];
								$author=$row['author'];
								$content=substr($row['content'],0,40);
								$image=$row['image'];
								$date=$row['date'];
						?>
						<tr>
							<td><?php echo$i++ ;?></td>
							<td><?php echo substr($row['title'],0,20) ?></td>
							<td><?php echo $row['author']; ?></td>
							<td><?php echo substr($row['content'],0,80 ); ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><img width="50" height="50"  src="images/<?php echo $row['image'];?>" ></td>
							<td><a href="edit.php?edit=<?php echo"$id"; ?>">Edit</a> | <a href="delete.php?id=<?php echo"$id"; ?>">Delete</a></td>
						</tr>
							<?php
							 }
							mysqli_close($connect);

					?>
						</tbody>
					</table>
					<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
						<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
					</div>

					<ul class="pagination">
						<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
							<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
						</li>

						<?php 
						if ($total_no_of_pages <= 10){  	 
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
										}
									}
								}
								elseif($total_no_of_pages > 10){
								
								if($page_no <= 4) {			
								for ($counter = 1; $counter < 8; $counter++){		 
								if ($counter == $page_no) {
								echo "<li class='active'><a>$counter</a></li>";	
							}else{
							echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}

						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}                  
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
						}

						else {
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";

						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}                   
						}
						}
						}
						?>

						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
							<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
					</ul>
				</div>
			</div>
			</div>
		</div>
		
	</div>
</body>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</html>