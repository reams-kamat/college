

 <?php
				session_start();
	 			include('includes/connect.php');
 				$user=$_SESSION['email'];
                $sql_query="SELECT * FROM `users` WHERE `email`= '$user'";
                $result = $connect->query($sql_query);
                if($result){
                while ($row = $result->fetch_assoc()) {
                $email=$row['email']; 
                $name=$row['name'];
                $phn=$row['phn'];
                $image=$row['image'];

              }
          }  
?>