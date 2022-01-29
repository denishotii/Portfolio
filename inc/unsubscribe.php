<?php
    session_start();

    include "../config.php";

    if(isset($_GET['email'])){
    
        $delete_email = $_GET['email'];
        if($delete_email === "'"){
            echo "<script>window.open('../index.php?error=Never try that again because you will get banned!!!','_self');</script>";
        }else{
        $delete_query = "DELETE FROM subscribers WHERE suEmail='$delete_email'";

            if(mysqli_query($connect, $delete_query))
            {
		
			     echo "<script>alert('You unsubscribed')</script>";
                 echo "<script>window.open('../index.php','_self');</script>";
			     //header("location: viewFile(Update&Delete).php");
		    }
        }
    }
