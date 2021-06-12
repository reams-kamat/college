<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location:../login.php');

	}
	else{
		$role =$_SESSION["role"];
	    if(!isset($_SESSION['email']) || $role!="admin"){
	      header('Location:../profile.php');
	    }
	}
?>