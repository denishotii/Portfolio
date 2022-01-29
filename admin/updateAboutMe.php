<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        include "./config.php";
        $select = "SELECT * FROM aboutme_section where aId='1'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

            while($row = mysqli_fetch_assoc($query)){
                $name = $row['aName'];
                $description = $row['aDescription'];
                $image = $row['aImage'];
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Update About me</title>
            <link rel="stylesheet" href="./css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('./images/aboutMe.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/updateAboutMe.inc.php">
                            <h2>Update About Me</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Name & Surname</label>
                                <input type="text" name="name" class="field" value="<?= $name ?>" required>
                            </label>
                            <label>
                                <label class="desc">Description</label>
                                <textarea class="field area" name="description" id="description" required></textarea>
                            </label>
                            <script>
                                // Kam perdorur JavaScript sepse duke i dhene vlere me VALUE=... Nuk funksiononte
                              document.getElementById(`description`).innerHTML="<?= $description  ?>";
                            </script>`
                            <label>
                                <a href="./changeAboutMeImage.php" style="margin-bottom: 10px;">Change Image Here</a>
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