<?php
    include('includes/session_check.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       
    </style>
    <meta charset="UTF-8">
    <title>Welcome &nbsp;<?php echo htmlspecialchars($_SESSION["email"]); ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="nab.css">
    <link rel="stylesheet" type="text/css" href="includes/navv.css">
    
    
</head>
<body>
    <nav class="navbar navbar-default" style="margin-bottom: 0px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" class="img img-responsive" src="images/logo.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse right_nav" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li><a href="index.php" class="a">Home</a></li>
                    <li class="dropdown">
                        <a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
                        <ul class="dropdown-menu">
                         <?php include'includes/programs_dropdown.php'; ?>
                        </ul>
                    </li>
                    <li ><a href="gallery.php" class="a">Gallery</a></li>
                    <li ><a href="notice.php" class="a">Notice</a></li>
                    <li ><a class="a" href="about.php">About</a></li>
                    <li><a href="support.php"class="a">Support</a></li>
                    <li>
                        <div class="search-container">
                            <form action="search.php" method="get" class="" role="search">
                                <input class="search" id="searchleft" type="search" name="search" placeholder="Search">
                                <label class="button1 searchbutton" for="searchleft"><span class="mglass">&#9906;</span></label>
                            </form>
                        </div>
                    </li>
                    

                </ul>
                <ul class="nav navbar-nav navbar-right">
                                                <?php
                       // database connection
                            include('includes/connect.php');
                        // Check if the user is logged in, if not then redirect him to login page
                        if(!isset($_SESSION["username"])){
                             echo '
                                        <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle a" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>
                                                        <ul class="dropdown-menu form1">
                                                            <li>
                                                                <form action="user_login.php" enctype="multipart/form-data" method="post" class="form-inline">
                                                                    <div class="form-group">
                                                                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                                                        <input type="email"  name="email" style="background-color: #3d4e5b;color:white;
                                                                        " class="form-control" id="exampleInputEmail3" placeholder="Email"><br><br>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                                                                        <input type="password" name="password" style="background-color: #3d4e5b;color:white"  class="form-control" id="exampleInputPassword3" placeholder="Password"><br><br>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label class="a">
                                                                            <input type="checkbox" > Remember me
                                                                        </label>
                                                                    </div>
                                                                    <button  type="submit" name="login" class="btn btn-default button_color">Sign in</button>
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
                                // echo '<img src="admin/user/images/'.$image1.'" onerror="this.onerror=null; this.src="admin/user/images/Default.jpg" " alt="none">';
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
                          ';}}  
                        }
                        
                      ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
        <div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
                <div>
                    <p align="center" style="color:#000000;font-size: 20px;padding-top: 20px;">Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site!!!</p>
                </div>
    </div>
        
                
    </div>
      <div style="background: #e6e6ff;height: auto;">
        <div>
                <?php
                    // include("includes/connect.php");
                    $user=$_SESSION['email'];
                    $sql_query="SELECT * FROM `users` WHERE `email`= '$user'";
                    $result = $connect->query($sql_query);
                    if($result){
                    while ($row = $result->fetch_assoc()) {
                    $username=$row['username'];
                    $email=$row['email'];
                    $name=$row['name'];
                    $address=$row['address'];
                    $phn=$row['phn'];
                    $password=$row['password'];
                    $image=$row['image'];
                    $date=$row['member_since'];
                }}  
                ?>               
                <div class=" container " style="padding: 50px;height:auto;">
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <span >
                                <a href="#edit5" class="btn btn-success " data-toggle="modal"><i class="fa fa-edit"></i> Add Post</a>
                            </span>
                            <span >
                                <a href="#postss" class="btn btn-success "><i class="fa fa-edit"></i>Your Posts</a>
                            </span>
                            <?php include 'includes/notice_modal.php'; ?>
                        </div>
                    </div>
                    <div class="row">
                           <div class="col-md-3">
                                <img class="img img-rounded" src="<?php echo (!empty($image)) ? 'admin/user/images/'.$image.'':'admin/user/images/Default.jpg'  ; ?>" width="100%" height="240" style="border-radius: 10px; ">
                            </div>
                            <div class="col-md-9 ow col-xs-12" style="height:auto;padding: 40px;">
                                <div class="row">
                                    <div class="col-md-9 col-xs-12" style="background: white;padding: 15px;">
                                        <h4>Name:&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; <?php echo $name; ?>
                                            <span class="pull-right">
                                                <a href="#edit" class="btn btn-success btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
                                            </span></h4>
                                        <h4>Email:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $email; ?></h4>
                                        <h4>Username:&emsp;&emsp;&emsp;&emsp;<?php echo $username; ?></h4>
                                        <h4>Contact Info:&emsp;&emsp;&emsp;&nbsp;<?php echo (!empty($phn)) ? $phn : 'N/a'; ?></h4>
                                        <h4>Address:&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo (!empty($address)) ? $address : 'N/a'; ?></h4>
                                        <h4>Member Since:&emsp;&emsp;&nbsp;<?php echo (!empty($date)) ? date('d M, Y', strtotime($date)) : 'N/a'; ?></h4>
                                    </div>
                                    
                                    <div class="col-md-3 col-xs-12">
                                        <br><br>
                                        <a href="logout.php" style="margin-bottom: 10px;" class="btn btn-danger">Log Out</a>
                                        <a href="about.php" class="btn btn-info" style="margin-bottom: 10px;">Learn More</a>
                                        <a href="#edit_pw" style="margin-bottom: 10px;" class="btn btn-warning " data-toggle="modal"><i class="fa fa-edit_pw"></i>Change Password</a>
                                       <!--  <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="postss">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                <h2 style="text-align: center;font-style:italic;"><b>Your Posts</b></h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Content</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                                            $page_no = $_GET['page_no'];
                                        } else {
                                            $page_no = 1;
                                        }

                                        $total_records_per_page = 10;
                                        $offset = ($page_no-1) * $total_records_per_page;
                                        $previous_page = $page_no - 1;
                                        $next_page = $page_no + 1;
                                        $adjacents = "2"; 

                                        $result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `post` where author='$name' ");
                                        $total_records = mysqli_fetch_array($result_count);
                                        $total_records = $total_records['total_records'];
                                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                            $second_last = $total_no_of_pages - 1; // total page minus 1

                            $result = mysqli_query($connect,"SELECT * FROM `post` where author='$name'   order by 1 desc LIMIT $offset, $total_records_per_page");
                            if($result->num_rows>0){
                            $i=1;
                            while($row = mysqli_fetch_array($result)){
                                $id=$row['id'];
                                $title=$row['title'];
                                $author=$row['author'];
                                $image=$row['image'];
                                $status=$row['status'];
                                $content=substr($row['content'],0,40);
                                $date=$row['date'];
                                ?>
                                <tr>
                                    <td><?php echo$i++ ;?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><img width="50" height="50"  src="admin/post/images/<?php echo $row['image'];?>" ></td>
                                    <td><?php echo substr($row['content'],0,80 ); ?></td>
                                    <?php  
                                        {
                                            if ($row['status']=='approved') {
                                               $color='green';
                                            } elseif ($row['status']=='rejected') {
                                                $color='red';
                                            } else{
                                                $color='darkorange';                                               
                                            }
                                    ?>
                                            
                                    <td style="color:<?php echo $color; ?>;"><?php echo $row['status']; ?></td>
                                    <?php 
                                        }
                                    ?>                      
                                    <td><button type="button"  class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Edit</button>



                                        <!-- |<a href="edit.php?edit=<?php echo"$id"; ?>">Edit</a> --> | <a href="delete_notice.php?id=<?php echo"$id"; ?>">Delete</a></td>
                                </tr>
                                        <!-- here i am creating a modal popup code......... -->

                                    <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title"><b>Update Post</b></h4>
                                                   
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" method="POST" action="notice_edit.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label style="padding-left: 50px;" class="col-sm-3 control-label" for="exampleInputEmail1">Title</label>
                                                            <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>"placeholder="title">
                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                <label style="padding-left: 50px;" for="firstname" class="col-sm-3 control-label">Author</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="author" class="form-control" id="exampleInputauthor1" placeholder="author" required="true" readonly value="<?php echo $author_name ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="padding-left: 50px;" for="address" class="col-sm-3 control-label">Content</label>
                                                <div class="col-sm-9">
                                                  <textarea class="form-control" id="address" name="content1"   id="content1"><?php echo $row['content']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="padding-left: 50px;" for="phn" class="col-sm-3 control-label">Photo</label>
                                                <div class="col-sm-9">
                                                  <input type="file" name="image" class="form-control" id="exampleInputimage1" placeholder="image">
                                                </div>
                                            </div>
                                                </div>
                                                <div class="modal-footer">
                                          <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                          <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                                          </form>
                                        </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- // end modal popup code........ -->




                                <?php
                            }
                            }
                            else
                            {
                                echo"<h2>No Results found.</h2>";
                                    }
                            mysqli_close($connect);

                            ?>
                        </tbody>
                    </table>
                    <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                        <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
                    </div>
                    <ul class="pagination">
                        <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

                        <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                            <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                        </li>

                        <?php 
                        if ($total_no_of_pages <= 10){       
                            for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                if ($counter == $page_no) {
                                    echo "<li class='active'><a>$counter</a></li>"; 
                                }else{
                                    echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                }
                            }
                        }
                        elseif($total_no_of_pages > 10){

                            if($page_no <= 4) {         
                                for ($counter = 1; $counter < 8; $counter++){        
                                    if ($counter == $page_no) {
                                        echo "<li class='active'><a>$counter</a></li>"; 
                                    }else{
                                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                    }
                                }
                                echo "<li><a>...</a></li>";
                                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                            }

                            elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {      
                                echo "<li><a href='?page_no=1'>1</a></li>";
                                echo "<li><a href='?page_no=2'>2</a></li>";
                                echo "<li><a>...</a></li>";
                                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {         
                                    if ($counter == $page_no) {
                                        echo "<li class='active'><a>$counter</a></li>"; 
                                    }else{
                                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                    }                  
                                }
                                echo "<li><a>...</a></li>";
                                echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                                echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                            }

                            else {
                                echo "<li><a href='?page_no=1'>1</a></li>";
                                echo "<li><a href='?page_no=2'>2</a></li>";
                                echo "<li><a>...</a></li>";

                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                    if ($counter == $page_no) {
                                        echo "<li class='active'><a>$counter</a></li>"; 
                                    }else{
                                        echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                    }                   
                                }
                            }
                        }
                        ?>

                        <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                            <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                        </li>
                        <?php if($page_no < $total_no_of_pages){
                            echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                        } ?>
                    </ul>
                </div>
            </div>
                    </div>
                </div>
            </div>
<?php include 'includes/profile_modal.php'; ?>
<?php include 'includes/password_modal.php'; ?>
<?php
    include('includes/footer.php');
?>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
         <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
    </button>
    
</body>
<script>

</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>