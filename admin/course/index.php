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
	<title>Manage Courses</title>
	<style>
		.bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
    background-color: #00a65a !important;
	color:white  !important;

}
	.bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
	color:white  !important;
    background-color: #dd4b39 !important;
}

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
					<li><a href="index.php" >Courses</a></li>
					<li><a href="../slider/index.php" >Slider</a></li>
					<li><a href="../gallery/index.php" >Gallery</a></li>
					 <li><a href="../post/index.php" >Post</a></li>
					<li><a href="../user/index.php" >User</a></li>
					 <li><a href="../includes/session_out.php" >Log Out</a></li>
				</ul>
			</div>
			<div  class="col-md-10 content_bar">
				<?php
			        if(isset($_SESSION['error'])){
			          echo "
			            <div class='alert alert-danger alert-dismissible'>
			              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			              <h4><i class='icon fa fa-warning'></i> Error!</h4>
			              ".$_SESSION['error']."
			            </div>
			          ";
			          unset($_SESSION['error']);
			        }
			        if(isset($_SESSION['success'])){
			          echo "
			            <div class='alert alert-success alert-dismissible'>
			              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			              <h4><i class='icon fa fa-check'></i> Success!</h4>
			              ".$_SESSION['success']."
			            </div>
			          ";
			          unset($_SESSION['success']);
			        }
			      ?>
				<div style="margin:50px;">
					<div class="box-header with-border">
						<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
					</div>
				
						
				</div>
				<div style="margin:50px;" >
					<h2 style="text-align: center;font-style:italic;"><b>Manage Courses</b></h2>
					
					<table class="table">
						<thead>
							<tr>
								<th>S.N</th>
								<th>Name</th>
								<th>Image</th>
								<th>Descriptions</th>
								<th>Affliated</th>
								<th>Student Photo</th>
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

							$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `courses`");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
						    $total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1; // total page minus 1

						    $result = mysqli_query($connect,"SELECT * FROM `courses` order by 1 desc LIMIT $offset, $total_records_per_page");
						    $i=1;
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$name=$row['name'];
								$image=$row['image'];
								$des=$row['des'];
								$affiliated=$row['affiliated'];
								$stu_photos=$row['stu_photos'];

						?>
						<tr>
							<td><?php echo$i++ ;?></td>
							<td><?php echo substr($row['name'],0,20) ?></td>
							<td>
								<img width="50" height="50"  src="images/course/<?php echo $row['image'];?>" ></td>
							<td><?php echo substr($row['des'],0,20) ?></td>
							<td><?php echo substr($row['affiliated'],0,20) ?></td>
							<td>
																<?php //display.php 
								$query="SELECT `stu_photos` FROM courses WHERE `name`='$name'";
								$fire=mysqli_query($connect,$query);
								$data=mysqli_fetch_array($fire);
								$res=$data['stu_photos'];
								$res=explode(" ",$res);
								$count=count($res)-1;
								for($i=0;$i<$count;++$i)
								{

								}
								echo "<p style='color:green;'>Total ".$count." images found.";
								?>
								<img width="50" height="50"  src="images/students/<?php echo $row['stu_photos'];?>" ></td>
							<td>
								<button type="button"  class='btn btn-success btn-sm edit btn-flat' data-toggle="modal" data-target="#myModal_edit<?php echo $row['id'] ?>">Edit</button>&ensp;<button type="button"  class='btn btn-danger btn-sm delete btn-flat' data-toggle="modal" data-target="#myModal_delete<?php echo $row['id'] ?>">Delete</button>
                            </td>
<!-- 
							<td><a href="edit.php?edit=<?php echo"$id"; ?>">Edit</a> | <a href="delete.php?id=<?php echo"$id"; ?>">Delete</a></td> -->
						</tr>

						<!-- Edit -->
							<div class="modal fade" id="myModal_edit<?php echo $row['id'] ?>" class="modal fade" role="dialog">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <div class="modal-header">
							              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                  <span aria-hidden="true">&times;</span></button>
							              <h4 class="modal-title"><b>Edit Category</b></h4>
							            </div>
							            <div class="modal-body">
							              <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="category_edit.php?id=<?php echo $row['id'] ?>">
							                <input type="hidden" class="catid" name="id">
							                <div class="form-group">
							                	<div class="row">
								                    <label for="edit_name" style="padding-left: 50px;" class="col-sm-3 control-label">Name</label>
								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" required="true" id="edit_name" name="name" value="<?php echo $name; ?>"placeholder="name">
								                    </div>
							                	</div>
							                </div>
							                <div class="form-group">
							                	<div class="row">
								                    <label for="photo" class="col-sm-3 control-label">Image</label>
								                    <div class="col-sm-9">
								                      <input type="file" id="photo" name="image" >
								                    </div>
							                	</div>
							                </div>
							                <div class="form-group">
							                	<div class="row">
								                    <label for="affliated" class="col-sm-3 control-label">Affliated</label>

								                    <div class="col-sm-9">
								                      <input type="text" class="form-control" id="affliated" name="affliated" required  value="<?php echo $affiliated; ?>">
								                    </div>
								                </div>
							                </div>
							                <div class="form-group">
							                	<div class="row">
								                    <label for="photo" class="col-sm-3 control-label">Student Photos</label>
								                    <div class="col-sm-9">
								                        <!-- <input type="file" name="photo[]" id="photo" multiple> -->
								                      <input type="file" id="photo1" name="photo" >
								                    </div>
								                </div>
							                </div>
							                <div class="form-group">
							                	<div class="row">
								                    <label for="photo" class="col-sm-3 control-label">Descriptions</label>  
								                    <div class="col-sm-9">
								                        <textarea name="content1"   id="content11<?php echo $id; ?>" ><?php echo $des; ?></textarea> <!-- CkEditor -->
														<script src="ckeditor/ckeditor.js"></script>
														<script> 
														    ClassicEditor.create(document.getElementById('content11<?php echo $id; ?>'));
														</script>                
								                    </div>  
							                 	</div>        
							                </div>
							            </div>
							            <div class="modal-footer">
							              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
							              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
							              </form>
							            </div>
							        </div>
							    </div>
							</div>

							<!-- Delete -->
							<div class="modal fade" id="myModal_delete<?php echo $row['id'] ?>" class="modal fade" role="dialog">
							    <div class="modal-dialog">
							        <div class="modal-content">
							            <div class="modal-header">
							              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                  <span aria-hidden="true">&times;</span></button>
							              <h4 class="modal-title"><b>Deleting...</b></h4>
							            </div>
							            <div class="modal-body">
							              <form class="form-horizontal" method="POST" action="category_delete.php?id=<?php echo $row['id'] ?>">
							                <input type="hidden" class="catid" name="id">
							                <div class="text-center">
							                    <p>DELETE CATEGORY</p>
							                    <h2 class="bold catname"><?php echo $name; ?></h2>
							                </div>
							            </div>
							            <div class="modal-footer">
							              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
							              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
							              </form>
							            </div>
							        </div>
							    </div>
							</div>

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
    <?php include 'includes/category_modal.php'; ?>

			</div>
		</div>
		
	</div>
</body>



<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.js"></script>

</html>