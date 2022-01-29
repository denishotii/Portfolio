<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

    include "../../config.php";
    
    if(isset($_POST['update']))
    {
        $sId = $_GET['edit'];
        $skill = $_POST['skill'];
        $percentage = $_POST['percentage'];

                
            
            $uploadFile="UPDATE skills SET sName='$skill', sPercentage='$percentage'where sId='$sId'";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../edit.php?editId=$sId&error=Skill updated SUCCESSFULLY");
                }
            }
        }
        