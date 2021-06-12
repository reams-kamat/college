

<?php
session_start();
// database connection
include('includes/connect.php');
if (isset($_POST['login'])) {
 
$email = $_POST['email'];
$password = $_POST['password'];
 		$user_check_query = "SELECT * FROM `users` WHERE username='$email' OR email='$email'";
        $result = mysqli_query($connect, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { 
                $sel_user = "SELECT * FROM `users` WHERE (username='$email'  AND password ='$password' ) OR (email='$email'   AND password ='$password')";
          				$run_user = mysqli_query($connect, $sel_user);
          				$check_user = mysqli_num_rows($run_user);
          						if($check_user>0){
            						// echo"<script>alert('email and Password is correct.')</script>";
            						// echo "<script>window.open('index.php','_self')</script>";
                          while ($row=mysqli_fetch_assoc($run_user)) {
                            if($row["role"]=="admin"){
                              $_SESSION["username"] = $row['username'];
                              $_SESSION["email"] = $row['email'];
                              $_SESSION["role"] = $row['role'];
                              header("location:admin/index.php");
                            }else{
                              $_SESSION["username"] = $row['username'];
                              $_SESSION["email"] = $row['email'];
                              $_SESSION["role"] = $row['role'];                              
                              header("location:profile.php"); 
                            }
                          }
          						  

                    	}
          						else{
          						header("location:login.php?login_failed2");
          						}
                    }
        else{
           // array_push($errors, "email already exists");
            header("location:login.php?login_failed1");
              }
         }



else {
        header("location:login.php");
// echo"<script>alert('email and Password is incorrect.')</script>";
}

?>