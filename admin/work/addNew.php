<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php?error=No Admin Logged in");
    }else{
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Add new Work</title>
            <link rel="stylesheet" href="../css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
            <style>
                body{
                    width: 100%;
                    height: 140vh;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('../images/work.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/addNew.inc.php" enctype="multipart/form-data">
                            <h2>Add new Work</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Banner</label>
                                <input type="file" name="banner" class="field" required>
                            </label>
                            <label>
                                <label class="desc">Title</label>
                                <input type="text" name="title" class="field" placeholder="Online Store using php & mysql" required>
                            </label>
                            <label>
                                <label class="desc">Description</label>
                                <textarea class="field area" name="description" placeholder="Online store admin side and user side!" id="description" required></textarea>
                            </label>
                            <label>
                                <label class="desc">Link</label>
                                <input type="text" name="link" class="field" placeholder="http://bleje.onlinewebshop.net/" required>
                            </label>
                            <label>
                                <label class="desc">Github</label>
                                <input type="text" name="github" class="field" placeholder="https://github.com/denishotii/feelthespace---php" required>
                            </label>

                            <label class="desc" style="margin-bottom: 15px;">
                                <input type="checkbox" name="notify" value="Yes" style="display:inline;"> Send Email Notifications to Subscribers
                            </label>
                                
                            
                            <input type="submit" name="upload" class="btn" value="Add new">
                            <a href="./index.php">Dashboard</a>
                        </form>
                </div>
        </div>
        </body>
    </html>
<?php
}
?>