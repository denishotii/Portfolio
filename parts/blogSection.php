    <?php
        $select = "SELECT * FROM blog order by bId DESC LIMIT 3";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $bId = $row['bId'];
            $banner = $row['bBanner'];
            $subtitle = $row['bSubtitle'];
            $title = $row['bTitle'];
            $shortDescription = $row['bShortDescription'];
    ?>  
            
            <div class="portofolio-container transition3">
                <div class="portofolio-left">
                    <!-- <p class="featured-title">November Code Festival</p> -->
                    <div class="inner">
                        <p class="subtitle"><?= $subtitle ?></p>
                        <p class="featured-title"><a href="./readBlog.php?bId=<?= $bId ?>"><?= $title ?></a></p>
                        <p class="featured-desc"><?= $shortDescription ?></p>
                    </div>
                </div>
                <a href="./readBlog.php?bId=<?= $bId ?>"><img src="images/<?= $banner ?>" alt="Portofolio"></a>
            </div>
    <?php
        }
   ?>
            <a class="transition3 subtitle" href="./blog.php">More Blogs...</a>

