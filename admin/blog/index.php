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
        <title>Denis Hoti | Blogs</title>
        <link rel="stylesheet" href="../css/table.css">
    </head>
    <body>
        <div class="table-container">
            <h1 class="heading">Blogs</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Banner</th>
                        <th>Title</th>
                        <th>Subitle</th>
                        <th> Short Description</th>
                        <th>Content</th>
                        <th>Date:</th>
                        <th><a href="./addNew.php">Add New</a></th>
                        <th><a href="../">Dashboard</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include "../config.php";

                    $select = "SELECT * FROM blog order by bId DESC";
                    $query = mysqli_query($connect, $select);
                
                    while( $row = mysqli_fetch_array($query))
                    {
                        $bId = $row['bId'];
                        $banner = $row['bBanner'];
                        $title = $row['bTitle'];
                        $subtitle = $row['bSubtitle'];
                        $description = $row['bShortDescription'];
                        $content = $row['bContent'];
                        $date = $row['bDate'];
                ?> 
                    <tr>
                        <td data-label="Banner"><img src="../../images/<?= $banner ?>" width="50px" height="50px" /></td>
                        <td data-label="Title"><?= $title ?></td>
                        <td data-label="Subitle"><?= $subtitle ?></td>
                        <td data-label="Short Description"><?= $description ?></td>
                        <td data-label="Content"><?= $content ?></td>
                        <td data-label="Date"><?= $date ?></td>
                        <td data-label="Add New"><span class=><a href="edit.php?editId=<?= $bId ?>" class="text_open">[ Edit ]</a></span></td>
                        <td data-label="Dashboard"><a href="./inc/delete.inc.php?delete=<?= $bId ?>" class="btn">
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