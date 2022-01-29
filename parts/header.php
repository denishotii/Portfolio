    <?php
        include "./config.php";
          $select = "SELECT * FROM header where hId='1'";
          $query = mysqli_query($connect, $select);
      
          while( $row = mysqli_fetch_array($query))
          {
              $logoName = $row['hLogoName'];
              $linkedin = $row['hLinkedin'];
              $instagram = $row['hInstagram'];
              $github = $row['hGithub'];
              $snapchat = $row['hSnapchat'];
    ?> 
            <header>
                <a href="./" class="logo"><?= $logoName ?></a>

                <nav>
                    <ul>
                        <li><a href="work.php">My work</a></li>
                        <li><a href="skills.php">My skills</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="index.php#contact-section">Hire me</a></li>
                    </ul>
                </nav>
            </header>
            <div class="social-header">
                <ul>
                    <li><a target="_blank" href="https://www.linkedin.com/in/<?= $linkedin ?>"><img src="images/linkedin.png" alt="LinkIn"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/<?= $instagram ?>"><img src="images/instagram.jfif" alt="Instagram"></a></li>
                    <li><a target="_blank" href="https://github.com/<?= $github ?>"><img src="images/github.png" alt="Github"></a></li>
                    <li><a target="_blank" href="https://www.snapchat.com/add/<?= $snapchat ?>"><img src="images/snap.png" alt="Snapchat"></a></li>
                </ul>
            </div>
            <?php 
                }             
            ?>