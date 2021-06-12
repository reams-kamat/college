<?php
include("admin/includes/connect.php");
$id=$_GET['id'];
if (isset($_POST['edit'])) {
	if ($_POST['title']=='' or $_POST['content1']=='' or $_POST['author']=='') {
		echo ("<script>alert('Fill all the required Fields.')</script>");
		exit();
		}	
	else{
		if (isset($_POST['edit'])) {
			$title=$_POST['title'];
			$author=$_POST['author'];
			$content1=$_POST['content1'];
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$date=date('y.m.d');

			if ($image_type=="image/jpeg" or $image_type=="" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif") {
				if ($image_size<=2000000) {
					move_uploaded_file($image_tmp,"images/$image_name");
							// <!-- // echo "$iid;"; -->
						$sql_query ="UPDATE `post` SET `title`='$title',`author`='$author',`image`='$image_name',`content`='$content1',`date`='$date',`status`='pending' WHERE `id` = '$id'"; 
						// <!-- // var_dump($sql_query); die(); -->
						$result = $connect->query($sql_query);
						if($result){
							echo "<script>alert('Post updated sucessfully and waiting for approval !!!')</script>";
							echo "<script>window.open('profile.php','_self')</script>";
						}
						else{
							echo "<script>alert('Failed to update')</script>";
							echo "<script>window.open('profile.php','_self')</script>";
						}
					} 
					else {
						echo ("<script>alert('Image sizeless than 2 MB is valid.')</script>");
							}
						} 
				else {
					echo ("<script>alert('Invalid file type.')</script>");
					echo "<script>alert('Failed to update')</script>";
					echo "<script>window.open('profile.php','_self')</script>";
									}
				
			}
		}}
?>