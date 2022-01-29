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
            <title>Denis Hoti | Update Certifications</title>
            <link rel="stylesheet" href="./css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('./images/certifications.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/updateCertifications.inc.php" enctype="multipart/form-data">
                            <h2>Update About Me</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">English Resume (PDF)</label>
                                <input type="file" name="englishR" class="field" required>
                            </label>
                            <label>
                                <label class="desc">Albanian Resume (PDF)</label>
                                <input type="file" name="albanianR" class="field" required>
                            </label>
                            <label>
                                <label class="desc">Certifications (PDF)</label>
                                <input type="file" name="certifications" class="field" required>
                            </label>
                            <label>
                                <label class="desc">Letter of Recommendation (PDF)</label>
                                <input type="file" name="letterOfR" class="field" required>
                            </label>
                            
                            
                            <input type="submit" name="update" class="btn" value="Update">
                            <a href="./index.php">Dashboard</a>
                        </form>
                </div>
        </div>
        </body>
    </html>
<?php
}
?>