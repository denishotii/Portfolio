<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php?error=No Admin Logged in");
    }else{
        include "../config.php";
        $bId = $_GET['editId'];
        $select = "SELECT * FROM blog where bId='$bId'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

        while($row = mysqli_fetch_assoc($query)){
            $banner = $row['bBanner'];
            $subtitle = $row['bSubtitle'];
            $title = $row['bTitle'];
            $description = substr($row['bShortDescription'],0,70);
            $content = substr($row['bContent'],0,70);
                        
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Edit Blog</title>
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
                        <form class="right" method="post" action="./inc/edit.inc.php?edit=<?= $bId ?>" enctype="multipart/form-data">
                            <h2>Edit Blog</h2>
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
                                <input type="text" name="title" class="field" value="<?= $title ?>" required>
                            </label>
                            <label>
                                <label class="desc">Subtitle</label>
                                <input type="text" name="subtitle" class="field" value="<?= $subtitle ?>" required>
                            </label>
                            <label>
                                <label class="desc">Short Description</label>
                                <textarea class="field area" name="description" id="description" required></textarea>
                            </label>
                            <label>
                                <label class="desc">Content</label>
                                 <textarea class="field area" name="content" id="content" required></textarea>
                            </label>
                            <script>
                              document.getElementById(`description`).innerHTML="<?= $description."..."  ?>";
                              document.getElementById(`content`).innerHTML="<?= $content."..."  ?>";
                            </script>
                            
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