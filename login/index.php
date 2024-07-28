<html>

<head>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <form action="login.php" method="post">
    <div class="page">
      <div class="container">
        <div class="left">
          <div class="login">Login</div>
          <div class="eula">
            By logging in you agree to the ridiculously long terms that you
            didn't bother to read
          </div>
        </div>
        <div class="right">
          <svg viewBox="0 0 320 300">
            <defs>
              <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
                <stop style="stop-color: #ff00ff" offset="0" id="stop876" />
                <stop style="stop-color: #ff0000" offset="1" id="stop878" />
              </linearGradient>
            </defs>
            <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
          </svg>
          <div class="form">
            <label for="Username">Username</label>
            <input type="uname" id="uname" name="uname" />
            <label for="password">Password</label>
            <input type="password" id="pswd" name="pswd" />
            <?php if (isset($_GET['error'])) { ?>
              <p class="error" style="position: absolute;"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="submit" id="submit" value="Submit" name="submit" onclick="" />
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
  <script src="index.js"></script>
</body>

</html>