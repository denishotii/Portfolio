<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['upload']))
    {
        $bannerUpload = $_FILES['banner']['name'];
        $bannerUpload_tmp = $_FILES['banner']['tmp_name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $github = $_POST['github'];
        $notify = $_POST['notify'];
                
            
            
                move_uploaded_file($bannerUpload_tmp,"../../../images/$bannerUpload");
            
            $uploadFile="INSERT INTO work(wBanner, wTitle, wDescription, wLink, wGithub)
                VALUES('$bannerUpload','$title','$description','$link','$github');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    if($notify == "Yes")
                    {
                    header("location: ./emailNotification.php?title=$title&description=$description&link=$link");
                    }else{
                    header("location: ../addNew.php?error=Work addedd SUCCESSFULLY");
                    }
                }
            }
        }
        
