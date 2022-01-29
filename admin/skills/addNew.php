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
            <title>Denis Hoti | Add new Skill</title>
            <link rel="stylesheet" href="../css/updating.css">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <div class="update-box">
                        <div class="left" style="background: url('../images/skills.png') no-repeat center;background-size: cover;"></div>
                        <form class="right" method="post" action="./inc/addNew.inc.php" enctype="multipart/form-data">
                            <h2>Add new Skill</h2>
                            <?php 
                                if(isset($_GET['error'])){
                            ?>
                            <p class="error"><?= $_GET['error'] ?></p>
                            <?php
                                }
                            ?>
                            <label>
                                <label class="desc">Skill</label>
                                <input type="text" name="skill" class="field" placeholder="php" required>
                            </label>
                            <label>
                                <label class="desc">Knowledge about skill(%)</label>
                                <select type="text" name="percentage" class="field" required>
                                    <option value="h00">0%</option>
                                    <option value="h01">5%</option>
                                    <option value="h02">10%</option>
                                    <option value="h03">15%</option>
                                    <option value="h04">20%</option>
                                    <option value="h05">25%</option>
                                    <option value="h06">30%</option>
                                    <option value="h07">35%</option>
                                    <option value="h08">40%</option>
                                    <option value="h09">45%</option>
                                    <option value="h10">50%</option>
                                    <option value="h11">55%</option>
                                    <option value="h12">60%</option>
                                    <option value="h13">65%</option>
                                    <option value="h14">70%</option>
                                    <option value="h15">75%</option>
                                    <option value="h16">80%</option>
                                    <option value="h17">85%</option>
                                    <option value="h18">90%</option>
                                    <option value="h19">95%</option>
                                    <option value="h20">100%</option>
                                </select>
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