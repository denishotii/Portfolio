<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['upload']))
    {
        $iconUpload = $_FILES['icon']['name'];
        $iconUpload_tmp = $_FILES['icon']['tmp_name'];
        $heading = $_POST['heading'];
        $description = $_POST['description'];
        $certifiedFrom = $_POST['certifiedFrom'];
        $certificateUpload = $_FILES['certificate']['name'];
        $certificateUpload_tmp = $_FILES['certificate']['tmp_name'];

                

            $insert="SELECT * FROM skilled_section WHERE sIcon='$iconUpload' OR sCertificate='$certificateUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            
            if($exist)
            {
                    header("location: ../addNew.php?error=Files already existing");
            }
            else
            {
                move_uploaded_file($iconUpload_tmp,"../../../images/$iconUpload");
                move_uploaded_file($certificateUpload_tmp,"../../../resume/$certificateUpload");
            
            $uploadFile="INSERT INTO skilled_section(sIcon, sHeading, sDescription, sCertificatedFrom, sCertificate)
                VALUES('$iconUpload','$heading','$description','$certifiedFrom','$certificateUpload');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../addNew.php?error=Skill Addedd SUCCESSFULLY");
                }
            }
        }
        
    }