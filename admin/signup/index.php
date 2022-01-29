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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Denis Hoti || Admin Register</title>
	<link rel="stylesheet" href="../css/signup.css">
</head>
<body>

<form action="../inc/signup.inc.php" method="post" class="wrapper">
    <div class="title">
      register as an admin
    </div><br>
    <p style="color: red;"><?= $error ?></p>
    <br>
    <div class="form">
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username" required>
       </div>  
       <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" name="emailsp" required>
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="passwordsp" required>
       </div>  
      <div class="inputfield">
          <label>Repeat Password</label>
          <input type="password" class="input" name="passwordsp-repeat" required>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="terms" value="YES" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="signup">
      </div>
      <a style="text-decoration:none;color:blue;" href="../login.php">Already registered? Sign in!</a>
    </div>
</form>	
	
</body>
</html>
<?php } ?>