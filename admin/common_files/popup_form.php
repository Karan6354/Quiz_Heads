<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Add/Edit Questions </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <link rel="stylesheet" href="css/popup_form.css">
          <div class="form_group">
            <input type="input" class="form_field" placeholder="Name" value="" name="question" id="question" style="color: blueviolet;">
            <label for="name" class="form_label" id="question">Question</label>
          </div>
          <div class="form_group1">
            <input type="input" class = "form_field1" placeholder=" " name="option1" id="option1" style="color: blueviolet;"> 
            <label for="name" class="form_label1">Option 1</label>
                    </div>
        <div class="form_group2">
            <input type="input" class = "form_field2" placeholder="Name" name="option2" id="option2" style="color: blueviolet;"> 
            <label for="name" class="form_label2">Option 2</label>
        </div>
        <div class="form_group3">
            <input type="input" class = "form_field3" placeholder="Name" name="option3" id="option3" style="color: blueviolet;"> 
            <label for="name" class="form_label3">Option 3</label>
        </div>
        <div class="form_group4">
            <input type="input" class = "form_field4" placeholder="Name" name="option4" id="option4" style="color: blueviolet;"> 
            <label for="name" class="form_label4">Option 4</label>
        </div>
        <div class="form_group5">
            <select name="options" id="answer" class="answer">
              <option value="">select option</option>
              <option class="form_group5" value="A">Option1</option>
              <option class="form_group5" value="B">Option2</option>
              <option class="form_group5" value="C">Option3</option>
              <option class="form_group5" value="D">Option4</option>
            </select>
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