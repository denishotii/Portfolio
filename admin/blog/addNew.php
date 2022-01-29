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
            <title>Denis Hoti | Add new Blog</title>
            <link rel="stylesheet" href="../css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
            <style>
                body{
                    width: 100%;
                    height: 160vh;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('../images/blog.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/addNew.inc.php" enctype="multipart/form-data">
                            <h2>Add new Blog</h2>
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
                                <input type="text" name="title" class="field" placeholder="Hackathon winner team in Tech Festival KosICT" required>
                            </label>
                            <label>
                                <label class="desc">Subtitle</label>
                                <input type="text" name="subtitle" class="field" placeholder="KosICT X Winner" required>
                            </label>
                            <label>
                                <label class="desc">Short Description</label>
                                <textarea class="field area" name="description" id="description" placeholder="During these 2 days in Tech Festival, I participate in a Hackathon with topic: Back to the future, where I won the First Place, Best Projest title with my project:Feel the Space in part with KosICT" required></textarea>
                            </label>
                            <label>
                                <label class="desc">Content</label>
                                <textarea class="field area" name="content" id="content" placeholder="During these 2 days in Tech Festival, I participate in a Hackathon with topic: Back to the future, where I won the First Place, Best Projest title with my project:Feel the Space in part with KosICT" required></textarea>
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