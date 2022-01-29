<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['upload']))
    {
        $bannerUpload = $_FILES['banner']['name'];
        $iconUpload_tmp = $_FILES['banner']['tmp_name'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $notify = $_POST['notify'];
        $date = date('Y-m-d');

                
            
            
                move_uploaded_file($iconUpload_tmp,"../../../images/$bannerUpload");
            
            $uploadFile="INSERT INTO blog(bBanner, bSubtitle, bTitle, bShortDescription, bContent, bDate)
                VALUES('$bannerUpload','$subtitle','$title','$description','$content','$date');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    if($notify == "Yes")
                    {
                    header("location: ./emailNotification.php?title=$title&description=$description");
                    }else{
                    header("location: ../addNew.php?error=Blog addedd SUCCESSFULLY");
                    }
                }
            }
        }
        
