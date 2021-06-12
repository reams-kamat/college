<?php
	include('../includes/session_check.php');
	include('../includes/connect.php');
	include('../includes/profile.php');
				$pid =$_GET['id'];
				// var_dump($pid); die();
				$sql_query="SELECT * FROM `users` WHERE `id` = '$pid'";
				$result = $connect->query($sql_query);
				if($result){
				while ($row = $result->fetch_assoc()) {
					$iid=$row['id'];
					$role=$row['role'];					
				}
					if ($role=='admin') {
						$role='user';
					} else {
						$role='admin';
					}
					$sql_query =" UPDATE `users` SET `role`='$role'  WHERE `id` = '$iid'"; 
						// <!-- // var_dump($sql_query); die(); -->
						$result = $connect->query($sql_query);
						if($result){
							echo "<script>alert('User role was updated sucessfully !!!')</script>";
							echo "<script>window.open('index.php','_self')</script>";
						}
						else{
							echo "<script>alert('Failed to update user role !!!')</script>";
							echo "<script>window.open('index.php','_self')</script>";
						}
				}
			?>