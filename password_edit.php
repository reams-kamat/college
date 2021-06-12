<?php
    include("includes/connect.php");
    session_start();
if (isset($_POST['edit'])) {
    
    $curr_password= $_POST['curr_password'];
    $password_new1= $_POST['password_new1'];
    $password_new2= $_POST['password_new2'];
    $user=$_SESSION["email"];

      $sql_query1="SELECT * FROM `users` WHERE `email`= '$user'";
      $result = $connect->query($sql_query1);
      if($result){
      while ($row = $result->fetch_assoc()) {
      $password=$row['password'];
    }
  }

    if(empty($curr_password) || empty($password_new1)|| empty($password_new2)){
        echo "<script>alert('Please Fill in the Blanks')</script>";
        echo "<script>window.open('profile.php?error','_self')</script>";
  }elseif(strlen($password_new1) < 6){
        echo "<script>alert('Password must have atleast 6 characters')</script>";
        echo "<script>window.open('profile.php?error3','_self')</script>";

  }elseif ($password_new1!=$password_new2){
        echo "<script>alert('New password and Conform password doesnot match')</script>";
        echo "<script>window.open('profile.php?error1','_self')</script>";
       }      
  elseif($password==$curr_password){
         // Prepare an update statement
        $sql = "UPDATE `users` SET `password`='$password_new1' WHERE `email` = '$user'";
          $result = $connect->query($sql);
            if($result){
                session_destroy();
                echo "<script>alert('Password was changed sucessfully')</script>";
                echo "<script>window.open('register.php?pass_changed','_self')</script>";
                exit();
            } else{
                echo "<script>alert('Oops! Something went wrong. Please try again later')</script>";
                echo "<script>window.open('profile.php?error2','_self')</script>";
            }                  
  }else{
         echo "<script>alert('Current Password Incorrect')</script>";
         echo "<script>window.open('profile.php?failed2','_self')</script>"; 
    }
}
?>