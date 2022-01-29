<?php
session_start();
     if(!isset($_SESSION['username'])){
         header("Location: ./login.php?error=no_user");
     }else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Denis Hoti | Subscribers</title>
        <link rel="stylesheet" href="./css/table.css">
    </head>
    <body>
        <div class="table-container">
            <h1 class="heading">Messages</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Subscriber Id</th>
                        <th>Email:</th>
                        <th>Date</th>
                        <th><a href="./index.php">Dashboard</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include "../config.php";

                    $select = "SELECT * FROM subscribers order by suId DESC";
                    $query = mysqli_query($connect, $select);
                
                    while( $row = mysqli_fetch_array($query))
                    {
                        $suId = $row['suId'];
                        $email = $row['suEmail'];
                        $date = $row['suDate'];
                ?> 
                    <tr>
                        <td data-label="Subscriber Id"><?= $suId ?></td>
                        <td data-label="Email"><a href="mailto:<?= $email ?>" target="_blank" class="text_open"><?= $email ?></a></td>
                        <td data-label="Date"><label class="text_open"><?= $date ?></label></td>
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