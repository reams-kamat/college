<?php
	include('../includes/session_check.php');
	include('../includes/connect.php');
	include('../includes/profile.php');
		if(isset($_POST['delete'])){
		$id = $_GET['id'];

						// var_dump($id); die();
		$sql_query = "DELETE FROM `courses` WHERE `id` = '$id'";
		// var_dump($sql_query); die();
		$result = $connect->query($sql_query);
		if($result){
			$_SESSION['success'] = 'course deleted successfully';

		}else{
		$_SESSION['error'] = 'Select course to delete first';
	}

	header('location: index.php');
	}
?>