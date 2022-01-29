<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['update']))
    {
        $sId = $_GET['edit'];
        $bannerUpload = $_FILES['banner']['name'];
        $bannerUpload_tmp = $_FILES['banner']['tmp_name'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $date = date('Y-m-d');

                
                move_uploaded_file($bannerUpload_tmp,"../../../images/$bannerUpload");
            
            $uploadFile="UPDATE blog SET bBanner='$bannerUpload', bTitle='$title', bShortDescription='$description', bSubtitle='$subtitle', bContent='$content', bDate='$date' where bId='$bId'";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../edit.php?editId=$sId&error=Blog updated SUCCESSFULLY");
                }
            }
        }
        