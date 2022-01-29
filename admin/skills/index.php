<?php
session_start();
     if(!isset($_SESSION['username'])){
         header("Location: ../login.php?error=no_user");
     }else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Denis Hoti | Skills</title>
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div class="table-container">
            <h1 class="heading">Skills</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Skill Id</th>
                        <th>Skill Name</th>
                        <th>Skill Knowledge(%)</th>
                        <th><a href="./addNew.php">Add New</a></th>
                        <th><a href="../">Dashboard</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include "../config.php";

                    $select = "SELECT * FROM skills order by sId DESC";
                    $query = mysqli_query($connect, $select);
                
                    while( $row = mysqli_fetch_array($query))
                    {
                        $sId = $row['sId'];
                        $skill = $row['sName'];
                        $percentage = $row['sPercentage'];
                ?> 
                    <tr>
                        <?php 
                            // Value of $percentage was with an "h" before the number but using substr function I got the numbers from it and multiplying with 5 will give the number of percentage 
                            $percentage = substr($percentage, -2)*5;
                        ?>
                        <td data-label="Skill Id"><?= $sId ?></td>
                        <td data-label="Skill Name"><?= $skill ?></td>
                        <td data-label="Skill Knowledge(%)"><?= $percentage."%" ?></td>
                        <td data-label="Add New"><span class=><a href="edit.php?editId=<?= $sId ?>" class="text_open">[ Edit ]</a></span></td>
                        <td data-label="Dashboard"><a href="./inc/delete.inc.php?delete=<?= $sId ?>" class="btn">
                        Delete</a></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php } ?>