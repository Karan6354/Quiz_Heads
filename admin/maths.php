<?php
session_start();
if(isset($_SESSION['user_name'])){
  
?>
<?php
require_once 'common_files/header.php';
?>
<!-- HERE YOU CAN WRIGHT ANY PAGE CONTENT -->
<!--Start Dashboard Content-->
<div class="container">
    <div class="alert alert alert-primary" role="alert" style="padding: 1%;">
            <h4 class="text-center" style="color:aliceblue;">MATHS</h4>
    </div>
    <!-- add/edit form modal -->
    <?php
    include_once 'common_files/popup_form.php';
    ?>
    <!-- add/edit form modal end -->

    <?php
    include_once 'common_files/popup_qdetails.php';
    ?>

    <div class="row mb-3">
        <div class="col-3" style="max-width: 15%;">
            <button type="button" style="Background-Color:Black; border-color:Black; border-radius:25px; " class="btn btn-primary" onclick="popup(); return false;" data-target="#userModal" id="addnewbtn">Add New <i class="fa fa-user-circle-o"></i></button>
        </div>
        <div class="col-9">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
            </div>
        </div>
    </div>
    <!-- table -->
    <?php
    include_once 'common_files/rows_area.php';
    ?>
    <!-- table -->
    <nav id="pagination">
    </nav>
    <input type="hidden" name="currentpage" id="currentpage" value="1">
</div>
<div>

    <!-- JS, Popper.js, and jQuery -->

</div>
<div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    <br />
    Loading...
</div>
<nav id="pagination">
</nav>
<input type="hidden" name="currentpage" id="currentpage" value="1">

<!--End Dashboard Content-->
<?php
require_once 'common_files/footer.php';
?>
<?php
}
else{
  header("location: ../login/index.php");
  exit();
}
?>