      <?php
          $select = "SELECT * FROM footer where fId='1'";
          $query = mysqli_query($connect, $select);
      
          while( $row = mysqli_fetch_array($query))
          {
              $aboutME = $row['fAboutMe'];
              $areaCode = $row['fAreaCode'];
              $phoneNumber = $row['fPhoneNumber'];
              $email = $row['fEmail'];
              $instagram = $row['fInstagram'];
              $linkedin = $row['fLinkedin'];
              $github = $row['fGithub'];
      ?> 

    <div class="content">
        <div class="leftfooter box">
          <div class="upper">
            <div class="topic">About me</div>
            <p><?= $aboutME ?></p>
          </div>
          <div class="lower">
            <div class="topic">Contact me</div>
            <div class="phone">
              <a class="link" href="tel: +<?= $areaCode.$phoneNumber ?>"><i class="fas fa-phone-volume"></i>+<?= $areaCode.$phoneNumber ?></a>
            </div>
            <div class="email">
              <a class="link" href="mailto: <?= $email ?>"><i class="fas fa-envelope"></i><?= $email ?></a>
            </div>
          </div>
        </div>
        <div class="rightfooter box">
          <div class="topic">Subscribe to my newsletter</div>
          <form action="./inc/newsletter.inc.php" method="POST">
            <input type="text" name="email" placeholder="Enter email address">
            <input type="submit" name="sub" value="Send">
            <div class="media-icons">
              <a class="link" target="_blank" href="https://www.instagram.com/<?= $instagram ?>"><i class="fab fa-instagram"></i></a>
              <a class="link" target="_blank" href="https://www.linkedin.com/in/<?= $linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
              <a class="link" target="_blank" href="https://github.com/<?= $github ?>"><i class="fab fa-github"></i></a>
            </div>
          </form>
        </div>
      </div>
      <div class="bottom">
      <?php   // Auto Updating Copyright Year
            $started_year = 2021; 
            $year_now = date('Y'); 
        if($started_year == $year_now){  
        ?>
          <p>Copyright © <?= $started_year ?> <a href="./">Denis Hoti</a> All rights reserved</p>
        <?php 
        }else{
        ?>
        <p>Copyright © <?= $started_year."-".$year_now ?> <a href="./">Denis Hoti</a> All rights reserved</p>
        <?php
        }
        ?>
      </div>

    <?php 
      } 
    ?>