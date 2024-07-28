<?php
session_start();
if(isset($_SESSION['user_name'])){
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>calendar</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!--Full Calendar Css-->
  <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel='stylesheet'/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->

   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Admin</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="index.php">
         <i></i> <span>Dashboard</span>
       </a>
     </li>

     <li>
       <a href="calendar.php">
         <i></i> <span>Calendar</span>
       
       </a>
     </li>

     <li>
       <a href="general_knowledge.php">
         <i></i> <span>General Knowledge</span>
       </a>
     </li>

     <li>
       <a href="maths.php">
         <i></i> <span>Maths</span>
       </a>
     </li>

     <li>
       <a href="periodic_table.php">
         <i></i> <span>Periodic Table</span>
       </a>
     </li>

     <li>
       <a href="find_the_difference.php">
         <i></i> <span>Find The Difference</span>
       </a>
     </li>

     
     <li>
       <a href="guess_the_object.php">
         <i></i> <span>Guess The Object</span>
       </a>
     </li>

     <li>
       <a href="movie_mania.php">
         <i></i> <span>Movie Mania</span>
       </a>
     </li>


     <li>
       <a href="java_programming.php">
         <i></i> <span>Java Programming</span>
       </a>
     </li>
     

     <li>
       <a href="c_programming.php">
         <i></i> <span>C Programming</span>
       </a>
     </li>

     <li>
       <a href="vb_programming.php">
         <i></i> <span>Visual Basic Programming</span>
       </a>
     </li>

     <!-- <li class="sidebar-header">LABELS</li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

   </ul>
  
  </div>


   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
     
    </li>
  </ul>
  <div class="logout" style="background-color: rgba(0,0,0,0.6);padding:.5% 1% .5% 1%;border-radius:10px;font-size:0.7em;">
    <a href="../login/logout.php"><i class="icon-power mr-2"></i> Logout</a>     
  </div>
  
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    
    <div class="mt-3">
      <div id='calendar'></div>
    </div>
			
		<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->	
			
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   
  <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          <!-- Copyright © 2018 Dashtreme Admin -->
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <script>
    function popup(){
    $('[id*="userModal"]').modal('show');
    }
    var path = window.location.pathname;
    var page = path.split("/").pop();
    if(page=="general_knowledge.php"){
      <?php
        require_once 'javascripts/gk_script.js';
      ?>
    }
    else if(page=="maths.php"){
      <?php
        require_once 'javascripts/mt_script.js';
      ?>
    }
    else if(page=="periodic_table.php"){
      <?php
        require_once 'javascripts/pt_script.js';
      ?>
    }
    else if(page=="find_the_difference.php"){
      <?php
        require_once 'javascripts/ftd_script.js';
      ?>
    }
    else if(page=="guess_the_object.php"){
      <?php
        require_once 'javascripts/gk_script.js';
      ?>
    }
    else if(page=="c_programming.php"){
      <?php
        require_once 'javascripts/c_script.js';
      ?>
    }
    else if(page=="vb_programming.php"){
      <?php
        require_once 'javascripts/vb_script.js';
      ?>
    }
    else if(page=="java_programming.php"){
      <?php
        require_once 'javascripts/java_script.js';
      ?>
    }
    console.log(page);
  </script>
  
  <!-- Full Calendar -->
  <script src='assets/plugins/fullcalendar/js/moment.min.js'></script>
  <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
  <script src="assets/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>
	
</body>
</html>
<?php
}
else{
  header("location: ../login/index.php");
  exit();
}
?>