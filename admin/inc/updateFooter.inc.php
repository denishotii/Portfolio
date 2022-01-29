<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['update']))
        {

            $fId = "1";
            $aboutMe = $_POST['aboutMe'];
            $areaCode = $_POST['areaCode'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $linkedin = $_POST['linkedin'];
            $instagram = $_POST['instagram'];
            $github = $_POST['github'];


                $ins_sql = "UPDATE footer SET fAboutMe='$aboutMe', fAreaCode='$areaCode', fPhoneNumber='$phoneNumber', fEmail='$email', fLinkedin='$linkedin', fInstagram='$instagram', fGithub='$github' WHERE fId=$fId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../updateFooter.php?error=Website updated SUCCESSFULLY");
                }

        }
}

    