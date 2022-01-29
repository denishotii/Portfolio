<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['update']))
        {

            $hId = "1";
            $logoname = $_POST['logoname'];
            $linkedin = $_POST['linkedin'];
            $instagram = $_POST['instagram'];
            $github = $_POST['github'];
            $snapchat = $_POST['snapchat'];


                $ins_sql = "UPDATE header SET hLogoName='$logoname', hLinkedin='$linkedin', hInstagram='$instagram', hGithub='$github', hSnapchat='$snapchat' WHERE hId=$hId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../updateHeader.php?error=Website updated SUCCESSFULLY");
                }

        }
}

    