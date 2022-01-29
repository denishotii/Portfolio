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
        <title>Denis Hoti | Work</title>
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div class="table-container">
            <h1 class="heading">Work</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Banner</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Website</th>
                        <th>Github:</th>
                        <th><a href="./addNew.php">Add New</a></th>
                        <th><a href="../">Dashboard</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include "../config.php";

                    $select = "SELECT * FROM work order by wId DESC";
                    $query = mysqli_query($connect, $select);
                
                    while( $row = mysqli_fetch_array($query))
                    {
                        $wId = $row['wId'];
                        $banner = $row['wBanner'];
                        $title = $row['wTitle'];
                        $description = $row['wDescription'];
                        $link = $row['wLink'];
                        $github = $row['wGithub'];
                ?> 
                    <tr>
                        <td data-label="Banner"><img src="../../images/<?= $banner ?>" width="50px" height="50px" /></td>
                        <td data-label="Title"><?= $title ?></td>
                        <td data-label="Description"><?= $description ?></td>
                        <td data-label="Website"><a href="<?= $link ?>" target="_blank" class="text_open">Website</a></td>
                        <td data-label="Files"><a href="<?= $github ?>" target="_blank" class="text_open">Files</a></td>
                        <td data-label="Add New"><span class=><a href="edit.php?editId=<?= $wId ?>" class="text_open">[ Edit ]</a></span></td>
                        <td data-label="Dashboard"><a href="./inc/delete.inc.php?delete=<?= $wId ?>" class="btn">
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