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
        <title>Denis Hoti | Skilled Section</title>
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div class="table-container">
            <h1 class="heading">Skilled Section</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Heading</th>
                        <th>Description</th>
                        <th>Certified From:</th>
                        <th>Certificate(PDF)</th>
                        <th><a href="./addNew.php">Add New</a></th>
                        <th><a href="../">Dashboard</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include "../config.php";

                    $select = "SELECT * FROM skilled_section order by sId DESC";
                    $query = mysqli_query($connect, $select);
                
                    while( $row = mysqli_fetch_array($query))
                    {
                        $sId = $row['sId'];
                        $icon = $row['sIcon'];
                        $heading = $row['sHeading'];
                        $description = $row['sDescription'];
                        $certifiedFrom = $row['sCertificatedFrom'];
                        $certificate = $row['sCertificate'];
                ?> 
                    <tr>
                        <td data-label="Icon"><img src="../../images/<?= $icon ?>" width="50px" height="50px" /></td>
                        <td data-label="Heading"><?= $heading ?></td>
                        <td data-label="Description"><?= $description ?></td>
                        <td data-label="Certified Froom:"><?= $certifiedFrom ?></td>
                        <td data-label="Certificate(PDF)"><a href="../../resume/<?= $certificate ?>" class="text_open">View Certificate </a></td>
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