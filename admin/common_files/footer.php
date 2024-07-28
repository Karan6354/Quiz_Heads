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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- <script src="javascripts/scripts.js"></script> -->
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
        require_once 'javascripts/gto_script.js';
      ?>
    }
    else if(page=="movie_mania.php"){
      <?php
        require_once 'javascripts/mm_script.js';
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
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
