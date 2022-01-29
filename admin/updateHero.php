<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        include "./config.php";
        $select = "SELECT * FROM hero_section where hId='1'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

            while($row = mysqli_fetch_assoc($query)){
                $heading = $row['heading'];
                $subheading = $row['subheading'];
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Update Hero</title>
            <link rel="stylesheet" href="./css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('./images/hero.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/updateHero.inc.php">
                            <h2>Update Hero</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Heading</label>
                                <input type="text" name="heading" class="field" value="<?= $heading ?>" required>
                            </label>
                            <label>
                                <label class="desc">Subheading</label>
                                <input type="text" name="subheading" class="field" value="<?= $subheading ?>" required>
                            </label>
                            
                            <input type="submit" name="update" class="btn" value="Update">
                            <a href="./index.php">Dashboard</a>
                        </form>
                </div>
        </div>
        </body>
    </html>
<?php
}}
?>