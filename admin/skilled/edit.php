<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php?error=No Admin Logged in");
    }else{
        include "../config.php";
        $sId = $_GET['editId'];
        $select = "SELECT * FROM skilled_section where sId='$sId'";
	
        $query = mysqli_query($connect, $select);
        $queryResult = mysqli_num_rows($query);

            while($row = mysqli_fetch_assoc($query)){
                $heading = $row['sHeading'];
                $description = $row['sDescription'];
                $certificatedFrom = $row['sCertificatedFrom'];
                    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Denis Hoti | Edit Skill Certification</title>
            <link rel="stylesheet" href="../css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
            <style>
                body{
                    width: 100%;
                    height: 125vh;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('../images/skilled.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/edit.inc.php?edit=<?= $sId ?>" enctype="multipart/form-data">
                            <h2>Edit Skill Certification</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Icon</label>
                                <input type="file" name="icon" class="field" required>
                            </label>
                            <label>
                                <label class="desc">Heading</label>
                                <input type="text" name="heading" class="field" value="<?= $heading ?>" required>
                            </label>
                            <label>
                                <label class="desc">Description</label>
                                <textarea class="field area" name="description" id="description" required></textarea>
                            </label>
                            <script>
                              document.getElementById(`description`).innerHTML="<?= $description  ?>";
                            </script>
                            <label>
                                <label class="desc">Certified From</label>
                                <input type="text" name="certifiedFrom" class="field" value="<?= $certificatedFrom ?>" required>
                            </label>
                            <label>
                                <label class="desc">Certificate(PDF)</label>
                                <input type="file" name="certificate" class="field" required>
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