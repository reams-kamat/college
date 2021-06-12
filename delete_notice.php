<?php
	include('includes/session_check.php');
?>
<?php
	include('includes/connect.php');
	// include('includes/profile.php');
?>



<?php
	$id = $_GET['id'];
// var_dump($id); die();
	$sql_query = "DELETE FROM `post` WHERE `id` = '$id'";
	// var_dump($sql_query); die();
	$result = $connect->query($sql_query);
	if($result){
		echo "<script>alert('Post deleted sucessfully')</script>";
		echo "<script>window.open('profile.php','_self')</script>";
	}
	else{
		echo "<script>alert('Failed to delete')</script>";
		echo "<script>window.open('profile.php','_self')</script>";
	}
?>