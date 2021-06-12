<!-- Edit Post -->
<div class="modal fade" id="edit7">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Update Post</b></h4>
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
               <form class="form-horizontal" method="POST" action="notice_edit.php" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>"placeholder="title">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Author</label>
                    <div class="col-sm-9">
                    <input type="text" name="author" class="form-control" id="exampleInputauthor1" placeholder="author" required="true" readonly value="<?php echo $author_name ?>">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Content</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="content1"   id="content1"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phn" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                      <input type="file" name="image" class="form-control" id="exampleInputimage1" placeholder="image">
                    </div>
                </div>
                <hr>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


