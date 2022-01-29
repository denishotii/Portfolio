<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
        include "./config.php";
        $select = "SELECT * FROM footer WHERE fId='1'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

        while($row = mysqli_fetch_assoc($query)){
            $aboutME = $row['fAboutMe'];
            $areaCode = $row['fAreaCode'];
            $phoneNumber = $row['fPhoneNumber'];
            $email = $row['fEmail'];
            $instagram = $row['fInstagram'];
            $linkedin = $row['fLinkedin'];
            $github = $row['fGithub'];
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Update Footer</title>
            <link rel="stylesheet" href="./css/updating.css">
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
                        <div class="left" style="background: url('./images/footer.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/updateFooter.inc.php">
                            <h2>Update Footer</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">About me</label>
                                <textarea class="field area" name="aboutMe" id="aboutme" required></textarea>
                            </label>
                            <script>
                              document.getElementById(`aboutme`).innerHTML="<?= $aboutME  ?>";
                            </script>
                             <label>
                                <label class="desc">Area Code</label>
                                <input type="text" name="areaCode" class="field" value="<?= $areaCode ?>" required>
                            </label>
                            <label>
                                <label class="desc">Phone Number</label>
                                <input type="text" name="phoneNumber" class="field" value="<?= $phoneNumber ?>" required>
                            </label>
                            <label>
                                <label class="desc">Email</label>
                                <input type="text" name="email" class="field" value="<?= $email ?>" required>
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