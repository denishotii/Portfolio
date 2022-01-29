<?php
    include "../config.php";

        if(isset($_GET['email'])){

            $confirm_email = $_GET['email'];

            if($confirm_email === "'"){
                echo "<script>window.open('../signin.php?error=Never try that again because you will get banned!!!','_self');</script>";
            }else{

                $delete_query = "UPDATE admin_login SET isConfirmed='1' WHERE email='$confirm_email'";

                if(mysqli_query($connect, $delete_query))
                {
                    echo "<script>window.open('../login.php?error=Email Confirmed please LOGIN','_self');</script>";
                    //header("location: viewFile(Update&Delete).php");
                }
            }
        }

            