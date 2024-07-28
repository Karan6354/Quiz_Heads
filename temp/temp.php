<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="formBox level-login">
      <div class="box boxShaddow"></div>
      <div class="box loginBox">
        <h2>LOGIN</h2>
        <?php 
          if(isset($_GET["pdf"])){
             $action = "login.php?pdf=true";
          }
          else{
            $action = "login.php";
          }
        ?>
        <form class="form" method="post" action=<?php echo $action;?> id="login">
          <div class="f_row">
          
            <label>Username</label>
            <input type="text" class="input-field" id="l_username" name="username" required>
            <u></u>
          </div>
          <div class="f_row last">
            <label>Password</label>
            <input type="password" class="input-field" id="l_password" name="password" required>
            <u></u><br><br>
            <?php  ?>
              <p class="error" style="color:red;position: absolute;" id="error"><?php 
                if (isset($_GET['error'])) {
                  echo $_GET['error'];
                }
                 ?></p>
          </div>
          <button class="btn" onclick="return vlogin()"><span>GO</span><u></u>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
              <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                            c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                            c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                            C415.582,102.628,414.103,99.059,411.47,96.426z" />
            </svg>
          </button>
          <div class="f_link">
            <!-- original link
            <a href="" class="resetTag">Forgot your password?</a><br> -->
            <a href="../user/reset_pass/index.php" class="">Forgot your password?</a><br>
          </div>
          <?php
            isset($_POST["hf_username"])? ($hf_username = $_POST["hf_username"]):"";
            isset($_POST["hf_quiz"])? ($hf_quiz = $_POST["hf_quiz"]):"";
            isset($_POST["hf_marks"])? ($hf_marks = $_POST["hf_marks"]):"";
          ?>
          <input type="hidden" name="hf_username" id="hf_username" value="<?php echo $hf_username ?>">
          <input type="hidden" name="hf_quiz" id="hf_quiz" value="<?php echo $hf_quiz ?>">
          <input type="hidden" name="hf_marks" id="hf_marks" value="<?php echo $hf_marks ?>">
          <script>
            // document.getElementById("hf_username").setAttribute("value",);
            // document.getElementById("hf_quiz").setAttribute("value",);
            // document.getElementById("hf_marks").setAttribute("value",);
          </script>
        </form>

      </div>
      <div class="box forgetbox">
        <a href="#" class="back icon-back">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;" xml:space="preserve">
            <polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
          199.404,117.876 " />
          </svg>
        </a>
        <h2>Reset Password</h2>
        <form class="form">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          <div class="f_row last">
            <label>Email Id</label>
            <input type="text" class="input-field" required>
            <u></u>
          </div>
          <button class="btn"><span>Reset</span><u></u>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
              <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                            c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                            c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                            C415.582,102.628,414.103,99.059,411.47,96.426z" />
            </svg>
          </button>
        </form>
      </div>
      <div class="box registerBox">
        <span class="reg_bg"></span>
        <h2>Register</h2>
        <form class="form" action="signup.php" method="POST" id="register">
          <div class="f_row">
            <label>Username</label>
            <input type="text" id="r_username" class="input-field" name="username">
            <u></u>
          </div>
          <div class="f_row">
            <label>Email</label>
            <input type="text" id="r_email" class="input-field" name="email">
            <u></u>
          </div>
          <div class="f_row">
            <label>Password</label>
            <input type="password" id="r_password" class="input-field" name="password">
            <u></u>
          </div>
          <div class="f_row last">
            <label>Repeat Password</label>
            <input type="password" id="r_cpassword" class="input-field" name="cpassword">
            <u></u><br>
            <p id="error2" style="color:white;"></p>
          </div>
          <button class="btn-large" style="width: 70%;" id="register_btn" onclick="return vregister()">NEXT</button>
        </form>
      </div>
      <a href="#" class="regTag icon-add">
        <div class="plus" style="margin: 35% 0 0 0;">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
            <path d="M357,204H204v153h-51V204H0v-51h153V0h51v153h153V204z" />
          </svg>
        </div>
      </a>
    </div>
  </div>
</body>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="script.js"></script>

</html>