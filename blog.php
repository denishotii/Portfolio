<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include "parts/head.php";
        ?>
        <title>Denis Hoti | Blog</title>
        <link rel="stylesheet" href="css/blog.css">
    </head>
    <body>
        <?php 
            include "parts/googleTagManager.php"
        ?> 

        <div class="nav-container">
             <?php 
                include "parts/header.php"
            ?> 
        </div>

        <!-- Blog Section -->
        <section class="info">
        <h1>My Blog</h1><br>
        </section>
        <section class="cards-wrapper">

    <?php
        include "./config.php";
        $select = "SELECT * FROM blog order by bId DESC";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $bId = $row['bId'];
            $banner = $row['bBanner'];
            $subtitle = $row['bSubtitle'];
            $title = $row['bTitle'];
            $shortDescription = $row['bShortDescription'];
            $date = $row['bDate']
    ?> 

            <div class="card-grid-space">
                <!-- <div class="num">02</div> -->
                <a class="card" href="./readBlog.php?bId=<?= $bId ?>" style="background-image: url('images/<?= $banner ?>')">
                <div>
                    <h1><?= $title ?></h1>
                    <p><?= $shortDescription ?></p>
                    <div class="date"><?= $date ?></div>
                </div>
                </a>
            </div>

            <?php } ?>
        </section>




        <footer class="transition3">
            <?php
                include "parts/footer.php"
            ?>
        </footer>

        <?php 
            include "parts/firebase.php"
        ?>
    </body>
</html>