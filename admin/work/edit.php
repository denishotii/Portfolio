<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php?error=No Admin Logged in");
    }else{
        include "../config.php";
        $wId = $_GET['editId'];
        $select = "SELECT * FROM work where wId='$wId'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

        while($row = mysqli_fetch_assoc($query)){
            $wId = $row['wId'];
            $banner = $row['wBanner'];
            $title = $row['wTitle'];
            $description = $row['wDescription'];
            $link = $row['wLink'];
            $github = $row['wGithub'];
                        
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Edit Work</title>
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
                        <form class="right" method="post" action="./inc/edit.inc.php?edit=<?= $wId ?>" enctype="multipart/form-data">
                            <h2>Edit Work</h2>
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
                                <label class="desc">Description</label>
                                <textarea class="field area" name="description" id="description" required></textarea>
                            </label>
                            <script>
                              document.getElementById(`description`).innerHTML="<?= $description."..."  ?>";
                            </script>
                            <label>
                                <label class="desc">Link</label>
                                <input type="text" name="link" class="field" value="<?= $link ?>" required>
                            </label>
                            <label>
                                <label class="desc">Github</label>
                                <input type="text" name="github" class="field" value="<?= $github ?>" required>
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