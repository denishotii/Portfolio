<?php
    session_start();
     if(!isset($_SESSION['username'])){
         header("Location: ../../login.php?error=no_user");
     }else{
        include "../../config.php";

        if(isset($_GET['delete'])){

            $delete_id = $_GET['delete'];

            $delete_query = "DELETE FROM work WHERE wId='$delete_id'";

            if(mysqli_query($connect, $delete_query))
            {
		
			     echo "<script>alert('Work is deleted!')</script>";
                 echo "<script>window.open('../index.php','_self');</script>";
			     //header("location: viewFile(Update&Delete).php");
		    }
        }

    }

?>