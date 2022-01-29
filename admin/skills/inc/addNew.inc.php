<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../../login.php?error=no_user");
    }else{

            include "../../config.php";
    
            if(isset($_POST['upload']))
            {
                $skill = $_POST['skill'];
                $percentage = $_POST['percentage'];
                
            
            
                $uploadFile="INSERT INTO skills(sName, sPercentage)
                VALUES('$skill','$percentage');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    header("location: ../addNew.php?error=Skill addedd SUCCESSFULLY");
                }
            }
     }

        
