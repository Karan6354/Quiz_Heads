<?php
session_start();
if(isset($_SESSION['user_name'])){
  
?>
<?php
  require_once 'common_files/header.php';
?>
<!-- HERE YOU CAN WRIGHT ANY PAGE CONTENT -->
<!--Start Dashboard Content-->

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