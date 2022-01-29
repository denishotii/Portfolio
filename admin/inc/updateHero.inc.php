<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['update']))
        {

            $hId = "1";
            $heading = $_POST['heading'];
            $subheading = $_POST['subheading'];


                $ins_sql = "UPDATE hero_section SET heading='$heading', subheading='$subheading' WHERE hId=$hId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../updateHero.php?error=Website updated SUCCESSFULLY");
                }

        }
}

    