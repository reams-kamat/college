<?php
    session_start(); 
    include('includes/connect.php');
      if(isset($_POST['btn-send']))
    {
       $Name = $_POST['name'];
       $username = $_POST['username'];
       $Email = $_POST['email'];
       $Address = $_POST['address'];
       $Password = $_POST['password'];
       $Password1 = $_POST['password1'];
       $Phn = $_POST['phn'];
       $date=date('y.m.d');
       $image_name=$_FILES['image']['name'];
       $image_type=$_FILES['image']['type'];
       $image_size=$_FILES['image']['size'];
       $image_tmp=$_FILES['image']['tmp_name'];
       
       if(empty($Name) || empty($Phn)|| empty($Email) || empty($username) || empty($Password) || empty($Password1)){
             header('location:register.php?error');
         }

         elseif (!preg_match("/^[a-zA-Z ]*$/",$Name)){
               header("location:register.php?invalid_name");
          }
        elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               header("location:register.php?invalid_email");
          }
          elseif ($Password1!==$Password) {
               header("location:register.php?invalid_password");
          }

       else
       {        // first check the database to make sure 
                // a user does not already exist with the same username and/or email
                $user_check_query = "SELECT * FROM `users` WHERE phn='$Phn' OR username='$username' OR email='$Email' LIMIT 1";
                $result = mysqli_query($connect, $user_check_query);
                $user = mysqli_fetch_assoc($result);
                if ($user) { // if user exists
                  if ($user['phn'] === $Phn) {
                    // array_push($errors, "Phone number already exists");
                     header("location:register.php?failed1");
                    }
                    if ($user['username'] === $username) {
                    // array_push($errors, "Phone number already exists");
                     header("location:register.php?failed2");
                    }

                  if ($user['email'] === $Email) {
                    // array_push($errors, "email already exists");
                   header("location:register.php?failed");
                  }
                }

                // Finally, register user if there are no errors in the form
                if ($user == 0) {
                  // $password = md5($password_1);//encrypt the password before saving in the database
                  if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif") {
                          if ($image_size<=2000000) {
                            move_uploaded_file($image_tmp,"admin/user/images/$image_name");
                            $query = "INSERT INTO `users`(`username`, `email`, `name`,`password`, `address`, `image`, `phn`, `member_since`) VALUES ('$username','$Email','$Name','$Password','$Address','$image_name',$Phn,'$date')";
                            $insert=mysqli_query($connect, $query);
                            if ($insert) {
                              header("location:register.php?success");
                             
                            } else {
                                header("location:register.php?failed3");                              
                            }
                            

                          } else {
                             header("location:register.php?large_size");
                           
                          }

                  } 
                  else {
                       header("location:register.php?invalid_file_format");    
                  }
                                    
                }
              }
       }
    
    else
    {
        header("location:register.php");
    }
?>