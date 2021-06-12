<?php
	include('../includes/session_check.php');
	include('../includes/connect.php');
	include('../includes/profile.php');
	if(isset($_POST['edit'])){
		$id = $_GET['id'];
		$name = $_POST['name'];
		// $image = $_POST['image'];
		$image_name=$_FILES['image']['name'];
	    $image_type=$_FILES['image']['type'];
	    $image_size=$_FILES['image']['size'];
	    $image_tmp=$_FILES['image']['tmp_name'];
		$affliated = $_POST['affliated'];
		// $photo = $_POST['photo'];
		$photo_name=$_FILES['photo']['name'];
	    $photo_type=$_FILES['photo']['type'];
	    $photo_size=$_FILES['photo']['size'];
	    $photo_tmp=$_FILES['photo']['tmp_name'];
		$content1 = $_POST['content1'];
		// $name = $_POST['name'];
		$sql_query1="SELECT * FROM `courses` WHERE `id`= '$id'";
			$result = $connect->query($sql_query1);
			if($result){
			while ($row = $result->fetch_assoc()) {
			$photos=$row['stu_photos'];
			$images=$row['image'];
		}
		 if(!empty($image_name)){
		 	    $filename = $image_name; 
		    }else{
		        $filename = $images;
		    }
		    if(!empty($photo_name)){
		 	    $filename1 = $photo_name; 
		    }else{
		        $filename1 = $photos;
		    }
		}	
		$user_check_query = "SELECT * FROM `courses` WHERE `name`='$name'  LIMIT 1";
		$result = mysqli_query($connect, $user_check_query);
        $check_user = mysqli_num_rows($result);
		$course = mysqli_fetch_assoc($result);
		// var_dump($check_user);die();
		
			// var_dump('$filename');die();	
		if($check_user > 0){
			if ($check_user ==1) {
					$result11 = mysqli_query($connect,"SELECT * FROM `courses` where `id`='$id' ");
					while($row = mysqli_fetch_array($result11)){
					$id=$row['id'];
					$name1=$row['name'];
					if ($name==$name1) {
						if ($content1=="") {
							$_SESSION['error'] = 'Fill all the fields';
						} else {
							if (($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="" or $image_type=="image/png" or $image_type=="image/gif") AND ($photo_type=="image/jpeg" or $photo_type=="image/jpg" or $photo_type=="image/png"  or $photo_type=="" or $photo_type=="image/gif") ){
		                          if ($image_size<=2000000 AND $photo_size<=2000000) {
			                            // move_uploaded_file($image_tmp,"admin/user/images/$image_name");
			                           	move_uploaded_file($image_tmp,"images/course/$image_name");
			                           	move_uploaded_file($photo_tmp,"images/students/$photo_name");
										$query1="UPDATE `courses` SET `name`='$name',`image`='$filename',`des`='$content1',`affiliated`='$affliated',`stu_photos`='$filename1'  WHERE `id`='$id'";
										$result1 = $connect->query($query1);

										if ($result1) {
										// echo "inserted";
										$_SESSION['success'] = 'Course was successfully updated';
											
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
    				else {	
				$_SESSION['error'] = 'course already exist';
			// echo "fregvre";
			}
				}
			} else {	
				$_SESSION['error'] = 'course already exist';
			// echo "fregvre";
			}

		}
		else{
			
			if ($content1=="") {
					$_SESSION['error'] = 'Fill all the fields';
				} else {
					if (($image_type=="image/jpeg"  or $image_type=="" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif") AND ($photo_type=="image/jpeg" or $photo_type=="image/jpg" or $photo_type=="" or $photo_type=="image/png" or $photo_type=="image/gif") ){
                          if ($image_size<=2000000 AND $photo_size<=2000000) {
	                            // move_uploaded_file($image_tmp,"admin/user/images/$image_name");
	                           	move_uploaded_file($image_tmp,"images/course/$image_name");
	                           	move_uploaded_file($photo_tmp,"images/students/$photo_name");
								$query1="UPDATE `courses` SET `name`='$name',`image`='$filename',`des`='$content1',`affiliated`='$affliated',`stu_photos`='$filename1'  WHERE `id`='$id'";
								$result1 = $connect->query($query1);

								if ($result1) {
								// echo "inserted";
								$_SESSION['success'] = 'Course was successfully updated';
									
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
	}

	header('location: index.php');
?>