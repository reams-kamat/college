<?php
    include("admin/includes/connect.php");
    session_start();
if (isset($_POST['edit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password1 = $_POST['curr_password'];
    $name = $_POST['name'];
    $phn_new= $_POST['phn'];
    $address = $_POST['address'];
    $image_name=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $user=$_SESSION["email"];
    	// echo "$phn";
	$sql_query1="SELECT * FROM `users` WHERE `email`= '$user'";
	$result = $connect->query($sql_query1);
	if($result){
	while ($row = $result->fetch_assoc()) {
	$password=$row['password'];
	$image=$row['image'];
}
 if(!empty($image_name)){
    $filename = $image_name; 
    }else{
            $filename = $image;
    }
}
    if ($password==$password1) {
        if(empty($name) || empty($phn_new)|| empty($address) || empty($email) || empty($password1) ){
            echo "<script>alert('Please Fill in the Blanks')</script>";
            echo "<script>window.open('profile.php?error','_self')</script>";
         }

         elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<script>alert('Invalid Name')</script>";
            echo "<script>window.open('profile.php?invalid_name','_self')</script>";
           
          }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            echo "<script>alert('Invalid Email')</script>";
            // echo "<script>window.open('profile.php?invalid_email','_self')</script>";      
          }      
       else
       {
            $user_check_query = "SELECT * FROM `users` WHERE email='$email' OR username='$username'";
            $result = mysqli_query($connect, $user_check_query);
            $check_user = mysqli_num_rows($result);
            // $user = mysqli_fetch_assoc($result);
            echo "$check_user";
            if ($check_user==0) {
                    if ($image_type=="image/jpeg" or $image_type=="image/jpg"or $image_type=="" or $image_type=="image/png" or $image_type=="image/gif") {
                              if ($image_size<=2000000) {
                                move_uploaded_file($image_tmp,"admin/user/images/$image_name");
                                $query ="UPDATE `users` SET `email`='$email',`name`='$name',`username`='$username',`phn`='$phn_new',`address`='$address',`image`='$filename' WHERE email='$user'";
                                mysqli_query($connect, $query);
                                session_destroy();
                                echo "<script>alert('Profile has been updated sucessfully')</script>";
                                echo "<script>window.open('logout.php?pro_changed','_self')</script>";
                              } else {

                                 echo "<script>alert('Image size larger than 2 MB can not be uploaded')</script>";
                                echo "<script>window.open('profile.php?large_size','_self')</script>";
                              }

                      }
                  else{
                 echo "<script>alert('Invalid file format')</script>";
                 echo "<script>window.open('profile.php?invalid_file_format','_self')</script>"; 
                  }
            }elseif ($check_user==1) {
                if ($email==$user && $username==$_SESSION['username']) {
                           if ($image_type=="image/jpeg" or $image_type=="image/jpg"or $image_type=="" or $image_type=="image/png" or $image_type=="image/gif") {
                              if ($image_size<=2000000) {
                                move_uploaded_file($image_tmp,"admin/user/images/$image_name");
                                $query ="UPDATE `users` SET `email`='$email',`name`='$name',`username`='$username',`phn`='$phn_new',`address`='$address',`image`='$filename' WHERE email='$user'";
                                mysqli_query($connect, $query);
                                echo "<script>alert('Profile has been updated sucessfully')</script>";
                                echo "<script>window.open('logout.php','_self')</script>";
                              } else {

                                 echo "<script>alert('Image size larger than 2 MB can not be uploaded')</script>";
                                echo "<script>window.open('profile.php?large_size','_self')</script>";
                              }

                      }
                  else{
                 echo "<script>alert('Invalid file format')</script>";
                 echo "<script>window.open('profile.php?invalid_file_format','_self')</script>"; 
                  }
                } else {
                    echo "<script>alert('Email or  Username already exist')</script>";
                    echo "<script>window.open('profile.php?failed','_self')</script>";  
                }
                
            }else{
                 echo "<script>alert('Email or Username already exist')</script>";
                 echo "<script>window.open('profile.php?failed','_self')</script>";
            }
    }
}
else{
         echo "<script>alert('Incorrect Password')</script>";
         echo "<script>window.open('profile.php?failed2','_self')</script>"; 
    }
}
?>