<?php 
  session_start();
  if(isset($_SESSION['email'])){
    header("Location: index.php?error=user_already_signed_in");
}else{
  $error = "";
  if (isset($_GET['error'])) {
    $error = $_GET['error']; 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="file/favicon.png" sizes="50x50" /> 
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Denis Hoti | Admin Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="inc/login.inc.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in Admin</h2><br>
            <p style="color: red;"><?= $error ?></p><br>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="Username or Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Go Back</p>
            <div class="social-media">
              <a href="../" class="social-icon">
                <i class="fas fa-long-arrow-alt-left"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Admin ONLY</h3>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <script src="js/app.js"></script>
  </body>
</html>
