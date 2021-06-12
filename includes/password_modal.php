<!-- Edit Profile -->
<div class="modal fade" id="edit_pw">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Update Password</b></h4>
            </div>
            <div class="modal-body">
              <?php 
                              $Msg = "";
                           if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                               if(isset($_GET['error1']))
                            {
                                $Msg = "New password and Conform password doesnot match";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                              if(isset($_GET['error2']))
                            {
                                $Msg = "Oops! Something went wrong. Please try again later";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                               if(isset($_GET['error3']))
                            {
                                $Msg = "Password must have atleast 6 characters";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                              if(isset($_GET['failed2']))
                                {
                                    $Msg = "Current Password Incorrect";
                                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                }
                            ?>
              <form class="form-horizontal" method="POST" action="password_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="password_new1"  class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-9">
                      <input type="password" required="true" class="form-control" id="password_new1" name="password_new1" placeholder="Enter new password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_new2" class="col-sm-3 control-label">Conform Password</label>
                    <div class="col-sm-9">
                      <input type="password" required="true" class="form-control" id="password_new2" name="password_new2" placeholder="Conform password">
                    </div>
                </div>
                <hr>                
                <div class="form-group">
                   <label for="curr_password" required="true" class="col-sm-3 control-label">Current Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Input current password to save changes" required>
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


