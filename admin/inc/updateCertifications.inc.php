<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        
        include "../config.php";
    
        if(isset($_POST['update']))
        {

            $rId = "1";
            $englishUpload=$_FILES['englishR']['name'];
            $englishUpload_tmp=$_FILES['englishR']['tmp_name'];

            $albanianUpload=$_FILES['albanianR']['name'];
            $albanianUpload_tmp=$_FILES['albanianR']['tmp_name'];

            $certificationsUpload=$_FILES['certifications']['name'];
            $certificationsUpload_tmp=$_FILES['certifications']['tmp_name'];

            $letterOfRUpload=$_FILES['letterOfR']['name'];
            $letterOfRUpload_tmp=$_FILES['letterOfR']['tmp_name'];


            $insert="SELECT * FROM resume_section WHERE rEnglishResume='$englishUpload' or rAlbanianResume='$albanianUpload' or rCertifications='$certificationsUpload' or rLetterOfRecommendation='$letterOfRUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            if($exist)
            {

                    header("location: ../updateCertifications.php?error=File already exists!");

            }
            else{

                move_uploaded_file($englishUpload_tmp, "../../resume/$englishUpload");
                move_uploaded_file($albanianUpload_tmp, "../../resume/$albanianUpload");
                move_uploaded_file($certificationsUpload_tmp, "../../resume/$certificationsUpload");
                move_uploaded_file($letterOfRUpload_tmp, "../../resume/$letterOfRUpload");

                $ins_sql = "UPDATE resume_section SET rEnglishResume='$englishUpload', rAlbanianResume='$albanianUpload', rCertifications='$certificationsUpload', rLetterOfRecommendation='$letterOfRUpload' WHERE rId=$rId";
                if(mysqli_query($connect,$ins_sql))      
                {
                    header("location: ../updateCertifications.php?error=Files changed SUCCESSFULLY");
                }
            }

        }
}

    