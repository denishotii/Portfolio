<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Change About Me Image</title>
            <link rel="stylesheet" href="./css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('./images/aboutMe.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/changeAboutMeImage.inc.php"  enctype="multipart/form-data">
                            <h2>Change About Me Image</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Image</label>
                                <input type="file" name="image" class="field">
                            </label>
                            
                            <input type="submit" name="change" class="btn" value="Change">
                            <a href="./updateAboutMe.php">Back</a>
                        </form>
                </div>
        </div>
        </body>
    </html>
<?php
}
?>