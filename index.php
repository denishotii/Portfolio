<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include "parts/head.php";
        ?>
        <title>Denis Hoti | Home</title>

    </head>
    <body>

        <?php 
            include "config.php";
        ?>

        <?php 
            include "parts/googleTagManager.php";
        ?> 

    
        <div class="nav-container">
             <?php 
                include "parts/header.php";
            ?> 
        </div>

        <div class="hero">
            <?php 
                include "parts/hero.php";
            ?>
        </div>

        <section class="featured">
            <?php 
                include "parts/aboutMe.php";
            ?>
        </section>

        <section class="skills">
            <?php 
                include "parts/skillsContainer.php";
            ?>
        </section>

        <section class="portofolio">
            <?php
                include "parts/resumeAndCertifications.php";
            ?>
            
            <?php
                include "parts/blogSection.php";
            ?>
        </section>

        <div id="contact-section" class="contact-section transition3">
            <?php
                include "parts/contact.php";
            ?>
        </div>

        <footer class="transition3">
            <?php
                include "parts/footer.php";
            ?>
        </footer>

        <?php 
            include "parts/firebase.php";
        ?>
    </body>
</html>