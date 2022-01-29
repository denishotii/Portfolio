<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        include "./config.php";
        $select = "SELECT * FROM header WHERE hId='1'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

            while($row = mysqli_fetch_assoc($query)){
                $logoName = $row['hLogoName'];
                $linkedin = $row['hLinkedin'];
                $instagram = $row['hInstagram'];
                $github = $row['hGithub'];
                $snapchat = $row['hSnapchat'];
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Update Heading</title>
            <link rel="stylesheet" href="./css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('./images/header.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/updateHeader.inc.php">
                            <h2>Update Header</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Logo Name</label>
                                <input type="text" name="logoname" class="field" value="<?= $logoName ?>" required>
                            </label>
                            <label>
                                <label class="desc">LinkedIn Username</label>
                                <input type="text" name="linkedin" class="field" value="<?= $linkedin ?>" required>
                            </label>
                            <label>
                                <label class="desc">Instagram Username</label>
                                <input type="text" name="instagram" class="field" value="<?= $instagram ?>" required>
                            </label>
                            <label>
                                <label class="desc">Github Username</label>
                                <input type="text" name="github" class="field" value="<?= $github ?>" required>
                            </label>
                            <label>
                                <label class="desc">Snapchat Username</label>
                                <input type="text" name="snapchat" class="field" value="<?= $snapchat ?>" required>
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