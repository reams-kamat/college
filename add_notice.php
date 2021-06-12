 <?php
          // database connection
          include('includes/connect.php');
          if (isset($_POST['publish'])) {
            if ($_POST['title']=='' or $_POST['content1']=='' or $_POST['author']=='') {
              echo ("<script>alert('Fill all the required Fields.')</script>");
              echo "<script>window.open('profile.php','_self')</script>";

              exit();
            } 
            else{
              $title=$_POST['title'];
              $author=$_POST['author'];
              $content1=$_POST['content1'];
              $image_name=$_FILES['image']['name'];
              $image_type=$_FILES['image']['type'];
              $image_size=$_FILES['image']['size'];
              $image_tmp=$_FILES['image']['tmp_name'];
              $date=date('y.m.d');

              if ($image_type=="image/jpeg" or $image_type=="image/jpg" or
               $image_type=="" or $image_type=="image/png" or $image_type=="image/gif") {
                if ($image_size<=2000000) {
                  move_uploaded_file($image_tmp,"admin/post/images/$image_name");
                  $query="INSERT INTO `post`(`title`, `author`, `image`, `content`, `date`) VALUES ('$title','$author','$image_name','$content1','$date')";
                  $result = $connect->query($query);
                  if($result){
                    echo ("<script>alert('Sucessfully post Published and waiting for approval ! ')</script>");
                    echo "<script>window.open('profile.php','_self')</script>";
                  }
                  else{
                     echo ("<script>alert('Failed to publish post!!!')</script>");
                    echo "<script>window.open('profile.php','_self')</script>";
                  }
                  } else {
                    echo ("<script>alert('Image sizeless than 2 MB is valid.')</script>");
                    echo "<script>window.open('profile.php','_self')</script>";                  
                  }

              } 
              else {
                echo ("<script>alert('Invalid file type.')</script>");
                echo "<h4><i> Failed to publish post!!! </i></h4>";
                echo "<script>window.open('profile.php','_self')</script>";

              }
            }
          }
          ?>