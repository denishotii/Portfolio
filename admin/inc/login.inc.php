<?php
session_start();

if (isset($_POST['login'])) {

    include "../config.php";
    $email = $_POST['email'];
	$password = $_POST['password'];

    $password = md5($password);

    $login = "SELECT * FROM admin_login WHERE username='$email' or email='$email' AND apassword='$password'";
                   
    $con = mysqli_query($connect, $login);

    if(mysqli_num_rows($con)>0)
    {   
        $row = mysqli_fetch_array($con);
        $id = $row["aId"];
        $username = $row['username'];
        $myEmail = $row["email"];
        $myPassword = $row["password"];
        $isConfirm = $row['isConfirmed'];
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $myEmail;
        $_SESSION['isConfirm'] = $isConfirm;
        
        if($_SESSION['isConfirm'] == 1){
            header("Location: ../index.php?login=succes");
        }else{
            session_destroy();
            header("Location: ../login.php?error=Ju lutem konfirmoni emailin tuaj!");
        }
    }
     elseif(empty($email) || empty($password))
       {
        header("Location: ../login.php?error=Fushat janë të zbrazëta!");
         echo "<script>alert('Username OR Password are empty!')</script>";
       }
    else
    {
        header("Location: ../login.php?error=Emaili or paswordi are wrong!");
        exit();
    }

}