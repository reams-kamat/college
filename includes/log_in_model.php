<head>
  <style type="text/css">
    @media screen and (max-width: 375px){
      .modal-dialog{
        width: auto;
        /*height: auto;*/
      }
    }
    @media screen and (min-width: 376px){
      .modal-dialog{
        width: 350px;
        /*height: auto;*/
      }
    }
  </style>
</head>
<!-- Edit Profile -->
<div class="modal fade" id="submit_login">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" align="center"><b>Sign In</b></h4>
            </div>
            <div class="modal-body">
              <?php 
                              $Msg = "";
                           if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_name']))
                            {
                                $Msg = "Please enter valid name ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_email']))
                            {
                                $Msg = " Invalid Email address ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            
                             if(isset($_GET['failed']))
                            {
                                $Msg = "Email already exist";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                              if(isset($_GET['failed11']))
                            {
                                $Msg = "Phone number already exist";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['invalid_file_format']))
                            {
                                $Msg = "Invalid file format";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                             if(isset($_GET['large_size']))
                            {
                                $Msg = "Image size larger than 2 MB can't be uploaded";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['login_failed2']))
                                {
                                    $Msg = "Incorrect Password";
                                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                }
                              
                               if(isset($_GET['login_success']))
                                {
                                    $Msg = " You are sucessfully  login!!! ";
                                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                                   
                    
                                }
                            ?>
              <form class="form-horizontal" method="POST" action="user_login.php" enctype="multipart/form-data">
                <center><img src="images/Default.png" width="150" height="150" class="img img-responsive"></center>
                  <br><br>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email or Username">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="login"><i class="fa fa-check-square-o"></i> Log In</button>
              </form>
            </div>
        </div>
    </div>
</div>


