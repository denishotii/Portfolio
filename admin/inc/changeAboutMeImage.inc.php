<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['change']))
        {

            $aId = "1";
            $fileUpload=$_FILES['image']['name'];
            $fileUpload_tmp=$_FILES['image']['tmp_name'];

            $insert="SELECT * FROM aboutme_section WHERE aImage='$fileUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            if($exist)
            {

                    header("location: ../changeAboutMeImage.php?error=Image already exists!");

            }
            else{

                move_uploaded_file($fileUpload_tmp, "../../images/$fileUpload");

                $ins_sql = "UPDATE aboutme_section SET aImage='$fileUpload' WHERE aId=$aId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../changeAboutMeImage.php?error=Image changed SUCCESSFULLY");
                }
            }

        }
}

    