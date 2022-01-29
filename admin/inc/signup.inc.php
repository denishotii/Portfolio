<?php
    session_start();
    
    //Inicializimi i variablave
    $username = "";
    $email    = "";
    $password = "";
    $password_repeat = "";
    $terms = "";

    $error;
    $errors = array();

    include "../config.php";

        if(isset($_POST['signup']))
        {
            //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
            $username = mysqli_real_escape_string($connect,$_POST['username']);
            $email = mysqli_real_escape_string($connect,$_POST['emailsp']);
            $password = mysqli_real_escape_string($connect,$_POST['passwordsp']);
            $password_repeat = mysqli_real_escape_string($connect,$_POST['passwordsp-repeat']);
            $terms = mysqli_real_escape_string($connect,$_POST['terms']);
                  
            
                
            $query = "SELECT * FROM admin_login WHERE email='$email' LIMIT 1";
                
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);
      
            if ($user) 
            { // if user exists
                if ($user['email'] === $email) 
                {
                    $error = 1;
                    header("Location: ../signup.php?error=This email was used before! Please try with another email.");
                }
            }
            if ($password !== $password_repeat){ 
                $error = 1;
                header("Location: ../signup.php?error=Password does not match!");
            }
            if(!preg_match("/^[a-zA-ZëË_]*$/", $emri)){
                $error = 1;
                header("Location: ../signup.php?error=Please use just letters at USERNAME field");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = 1;
                header("Location: ../signup.php?error=Please insert a VALID email address!");
            }
            if(strlen($password) < 6){
                $error = 1;
                header("Location: ../signup.php?error=Password must be 6 or more characters!");
            }
            if($error == 0)
            {
               $password = md5($password); //encrypt i passwordit para se ta ruajme ne database
                
                    $regist ="INSERT INTO admin_login (username,email,apassword, terms)
                    VALUES ('$username','$email','$password','$terms')";
                    
                        mysqli_query($connect,$regist);
                        $_SESSION['myEmail'] = $email;
                        header("Location: confirmEmail.php");
        
                   }
            }
    ?>
    