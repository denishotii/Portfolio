<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['update']))
    {
        $wId = $_GET['edit'];
        $bannerUpload = $_FILES['banner']['name'];
        $bannerUpload_tmp = $_FILES['banner']['tmp_name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $github = $_POST['github'];

                
                move_uploaded_file($bannerUpload_tmp,"../../../images/$bannerUpload");
            
            $uploadFile="UPDATE work SET wBanner='$bannerUpload', wTitle='$title', wDescription='$description', wLink='$link', wGithub='$github' where wId='$wId'";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../edit.php?editId=$wId&error=Work updated SUCCESSFULLY");
                }
            }
        }
        