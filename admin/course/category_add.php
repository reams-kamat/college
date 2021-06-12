 
s<?php
	include('../includes/session_check.php');
	include('../../includes/connect.php');
	include('../includes/profile.php');

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$image_name=$_FILES['image']['name'];
		$image_type=$_FILES['image']['type'];
		$image_size=$_FILES['image']['size'];
		$image_tmp=$_FILES['image']['tmp_name'];
		$affliated = $_POST['affliated'];
		$content1 = $_POST['content1'];
		// var_dump($image_type);die();

		// $photo_name=$_FILES['photos']['name'];
		$photo_type=$_FILES['photos']['type'];
		// $photo_size=$_FILES['photos']['size'];
		// $photo_tmp=$_FILES['photos']['tmp_name'];
		// // $name = $_POST['name'];
		$user_check_query = "SELECT * FROM `courses` WHERE `name`='$name'  LIMIT 1";
		$result = mysqli_query($connect, $user_check_query);
        $check_user = mysqli_num_rows($result);
		$course = mysqli_fetch_assoc($result);
		// var_dump($check_user);die();
		
		if($check_user > 0){
			$_SESSION['error'] = 'course already exist';
			// echo "fregvre";
		}
		else{
				if ($content1=="") {
					$_SESSION['error'] = 'Fill all the fields';
				} else {
					if (($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif") /*AND ($photo_type=="image/jpeg" or $photo_type=="image/jpg" or $photo_type=="image/png" or $photo_type=="image/gif")*/ ){
                          if ($image_size<=2000000 AND $photo_size<=2000000) {
	                            // move_uploaded_file($image_tmp,"admin/user/images/$image_name");
	                           	move_uploaded_file($image_tmp,"images/course/$image_name");
	                           	// move_uploaded_file($photo_tmp,"images/students/$photo_name");
	                           	 $file='';
								 $file_tmp='';
								 $location="images/students/";
								 $data='';
								 foreach($_FILES['photos']['name'] as $key=>$val)
								{
								 $file=$_FILES['photos']['name'][$key];
								 $file_tmp=$_FILES['photos']['tmp_name'][$key];
								 move_uploaded_file($file_tmp,$location.$file);
								 $data .=$file." ";
								}
								$query1="INSERT INTO `courses`(`name`, `image`, `des`, `affiliated`, `stu_photos`) VALUES ('$name','$image_name','$content1','$affliated','$data')";
								$result1 = $connect->query($query1);

								if ($result1) {
								// echo "inserted";
								$_SESSION['success'] = 'Category added successfully';
									
								}
								else{
								$_SESSION['error'] = 'Failed to publish !!!';
									}
	                            

                          } else {
                            	$_SESSION['error'] = 'Image sizeless than 2 MB is valid.';              
                            }

                  } 
                  else {
                      $_SESSION['error'] = 'Invalid file type.';  
                  }
				}
				
            }

	header('location: index.php');
	}
?>