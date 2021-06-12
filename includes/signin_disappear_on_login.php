<?php
  session_start();
  // database connection
  include('includes/connect.php');
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["username"])){
   echo '
     <li class="dropdown">
     <a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>
     <ul class="dropdown-menu form1">
     <li>
     <form action="user_login.php" enctype="multipart/form-data" method="post">
     <div class="form-group">
     <label class="sr-only" for="exampleInputEmail3">Email address</label>
     <input type="text"  name="email" style="background-color: #3d4e5b;color:white;
     " class="form-control" id="exampleInputEmail3" placeholder="Email or Username">
     </div>
     <div class="form-group">
     <label class="sr-only" for="exampleInputPassword3">Password</label>
     <input type="password" name="password" style="background-color: #3d4e5b;color:white"  class="form-control" id="exampleInputPassword3" placeholder="Password">
     </div>
     <div class="row">
     <div class="col-md-8 ">
     <div class="checkbox">
     <label class="a">
     <input type="checkbox" > Remember me
     </label>
     </div>
     </div>
     <div class="col-md-2 " style="padding-left:0px;">
     <button  type="submit" name="login" class="btn btn-default button_color">Sign in</button>
     </div>


     </div>
     </form>
     </li>
     </ul>
     </li>
     <li>
     <a href="register.php" class="btn btn-danger" id="register_butto_nav" >Register</a>
     </li>
   ';

  }

  else{
    $role =$_SESSION["role"];
    if(!isset($_SESSION['username']) || $role=="admin"){
      header('Location:admin/index.php');
    }
    $email=$_SESSION["email"];
    $sql_query="SELECT * FROM `users` WHERE `email`= '$email' OR `username`= '$email'";
    $result = $connect->query($sql_query);
    if($result){
      while ($row = $result->fetch_assoc()) {
        $name=$row['name'];
        $image=$row['image'];
        $email=$row['email'];
        $phn=$row['phn'];
        $date1=date('M, Y', strtotime($row['member_since']));
                                  // echo '<img src="users/images/'.$image1.'" onerror="this.onerror=null; this.src="users/images/Default.jpg" " alt="none">';
        $image1 = (!empty($image)) ? 'admin/user/images/'.$image.'':'admin/user/images/Default.jpg'  ;

        echo '
          <li class="dropdown dropdown22 user user-menu" >
          <a href="#" class="dropdown-toggle user123"  data-toggle="dropdown">
          <img src="'.$image1.'" class="user-image" alt="User Image">
          <span class="hidden-xs" >'.$name.' </span>
          </a>
          <ul class="dropdown-menu user1" style="width:300px;">

          <!-- User image -->
          <li class="user-header" style="background: #3d4e5b;padding-top:20px;" >
          <img src="'.$image1.'" class="img-circle" alt="User Image" >

          <p>
          '.$name.'
          <small>Member since '.$date1.'</small>
          </p>
          </li>
          <div>
          <li class="user-footer" style="background-color: #f9f9f9;;height:50px;padding: 7px;">
          <div class="pull-left" >
          <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
          </div>
          <div class="pull-right">
          <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
          </div>
          </li>
          </div>
          </ul>
          </li>
        ';}
        }  
      }
?>