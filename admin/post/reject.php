	<?php
		include('../includes/connect.php');
		$pid =$_GET['id'];
		// var_dump($pid); die();
		$sql_query ="UPDATE `post` SET `status`='rejected' WHERE `id` = '$pid'"; 
						// <!-- // var_dump($sql_query); die(); -->
		$result = $connect->query($sql_query);
		if($result){
			echo "<script>alert('Post was rejected sucessfully')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
		else{
			echo "<script>alert('Failed to update')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	?>
