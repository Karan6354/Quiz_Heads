<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Add/Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <link rel="stylesheet" href="css/popup_form.css">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo1" id="questionphoto1">
            <label class="custom-file-label" for="userphoto" style="color: black;background-color:blueviolet;">Choose file</label>
            <input type="hidden" name="hp1" id="photo1" value="">
          
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo2" id="questionphoto2">
            <label class="custom-file-label" for="userphoto" style="color: black;background-color:blueviolet;">Choose file</label>
            <input type="hidden" name="hp2" id="photo2" value="">
          </div>
          <div class="form_group">
            <input type="input" class="form_field" placeholder=" " value="" name="diff_no" id="diff_no" style="color: blueviolet;">
            <label for="name" class="form_label" id="difference_no">No.of difference</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn nb" data-dismiss="modal">Close</button>
          <button type="submit" class="btn nb" id="addButton">Submit</button>
          <input type="hidden" name="action" value="addques">
          <input type="hidden" name="qid" id="qid" value="">
        </div>
      </form>
    </div>
  </div>
</div>