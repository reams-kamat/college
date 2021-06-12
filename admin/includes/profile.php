<?php
	// include("includes/connect.php");
	$user=$_SESSION['username'];
	$sql_query="SELECT * FROM `users` WHERE `username`= '$user'";
	$result = $connect->query($sql_query);
	if($result){
	while ($row = $result->fetch_assoc()) {
	$name=$row['username'];
	$image=$row['image'];
}}	
?>