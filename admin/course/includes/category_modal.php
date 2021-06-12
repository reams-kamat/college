<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Category</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                      <input type="file" id="photo" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="affliated" class="col-sm-3 control-label">Affliated</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="affliated" name="affliated" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photos" class="col-sm-3 control-label">Student Photos</label>
                    <div class="col-sm-9">
                        <input type="file" name="photos[]" id="photos" multiple>
                      <!-- <input type="file" id="photo1" name="photo" required> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Descriptions</label>  
                    <div class="col-sm-9">
                        <textarea name="content1"   id="content1" ></textarea>                   
                    </div>          
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- CkEditor -->
<script src="ckeditor/ckeditor.js"></script>
<script> 
    ClassicEditor.create(document.getElementById('content1'));
</script>
