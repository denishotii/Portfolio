<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['update']))
    {
        $sId = $_GET['edit'];
        $iconUpload = $_FILES['icon']['name'];
        $iconUpload_tmp = $_FILES['icon']['tmp_name'];
        $heading = $_POST['heading'];
        $description = $_POST['description'];
        $certifiedFrom = $_POST['certifiedFrom'];
        $certificateUpload = $_FILES['certificate']['name'];
        $certificateUpload_tmp = $_FILES['certificate']['tmp_name'];

                
                move_uploaded_file($iconUpload_tmp,"../../../images/$iconUpload");
                move_uploaded_file($certificateUpload_tmp,"../../../resume/$certificateUpload");
            
            $uploadFile="UPDATE skilled_section SET sIcon='$iconUpload', sHeading='$heading', sDescription='$description', sCertificatedFrom='$certifiedFrom', sCertificate='$certificateUpload' where sId='$sId'";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../edit.php?editId=$sId&error=Skill updated SUCCESSFULLY");
                }
            }
        }
        