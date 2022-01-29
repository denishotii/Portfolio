<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['update']))
        {

            $aId = "1";
            $name = $_POST['name'];
            $description = $_POST['description'];


                $ins_sql = "UPDATE aboutme_section SET aName='$name', aDescription='$description' WHERE aId=$aId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../updateAboutMe.php?error=Website updated SUCCESSFULLY");
                }

        }
}

    