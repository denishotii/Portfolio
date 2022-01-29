            <div class="skills-container">
                <ul>
    <?php
        $select = "SELECT * FROM skilled_section order by sId DESC LIMIT 3";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $sId = $row['sId'];
            $icon = $row['sIcon'];
            $heading = $row['sHeading'];
            $description = $row['sDescription'];
            $certifiedFrom = $row['sCertificatedFrom'];
            $certificate = $row['sCertificate'];
    ?> 
                    <li class="transition2">
                        <div class="icon-container one">
                            <img src="images/<?= $icon ?>" alt="UX Design">
                        </div>
                        <p class="skill-title"><?= $heading ?></p>
                        <p class="featured-desc skill-desc"><?= $description ?> from <a target="_blank" href="resume/<?= $certificate ?>"><b style="color:blueviolet"><?= $certifiedFrom ?></b></a></p>
                    </li>
    <?php 
        }
    ?>
                </ul>
            </div>
            