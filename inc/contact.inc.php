<?php 

    session_start();

    $name = "";
    $email = "";
    $message = "";
    $error = 0;


    include "../config.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date = date('Y-m-d H:i:s');

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 1;
            header("Location: ../index.php#contact-section?contact=Please enter a valid email");
        }

        if($error == 0)
            {
               
                    $contact ="INSERT INTO contact (cName, cEmail, cMessage, cDate)
                    VALUES ('$name','$email','$message','$date')";
                    
                        mysqli_query($connect,$contact);
                         header("Location: ./contactEmailToMe.php?name=$name&email=$email&message=$message#contact-section");

        
            }

    }

