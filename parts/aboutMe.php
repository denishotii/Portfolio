    <?php
        $select = "SELECT * FROM aboutme_section where aId='1'";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $name = $row['aName'];
            $description = $row['aDescription'];
            $image = $row['aImage'];
    ?>            
            
            <div class="left">
                <div class="inner transition2">
                    <p class="subtitle">About Me</p>
                    <p class="featured-title"><?= $name ?></p>

                    <p class="featured-desc"><?= $description ?></div>
            </div>
            <img class="right transition2" src="./images/<?= $image ?>" alt="Project 1">

    <?php 
        }
    ?>