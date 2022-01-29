<?php
    session_start();
    
    //Inicializimi i variablave
    $email = "";
    $error;

    include "../config.php";
    if(isset($_POST['sub']))
    {
        $email = $_POST['email'];
        $nDate = date('Y-m-d H:i:s');
        $query = "SELECT * FROM subscribers WHERE suEmail='$email' LIMIT 1";
                
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);

            if ($user) 
            {
                $error = 1;
            }
            if (empty($email)){ 
                $error = 1;
                header("Location: ../index.php?newsletter=Fiels is empty!");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = 1;
                header("Location: ../index.php?newsletter=Please insert a valid email");
            }
            if($error == 0)
            {
              // $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
                
                //Kujdes te veqant tek insertimi i te dhenave!!!
               
                    $regist ="INSERT INTO subscribers (suEmail,suDate)
                    VALUES ('$email','$nDate')";
                    
                        mysqli_query($connect,$regist);
                        header("Location: newsletterEmail.php?email=$email");
        
                   }else{
                    header("Location: ../index.php?newsletter=Email is already subscribed!");

                   }
    }