<?php
      session_start();
        include "./config.php";

        if(isset($_GET['bId'])){

            $blog_id = $_GET['bId'];

            $select = "SELECT * FROM blog WHERE bId='$blog_id'";
	
            $query = mysqli_query($connect, $select);

            while($row = mysqli_fetch_assoc($query)){
                    $banner = $row['bBanner'];
                    $subtitle = $row['bSubtitle'];
                    $title = $row['bTitle'];
                    $content = $row['bContent'];
                    $date = $row['bDate'];
                  }
                
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PDMTX9K');</script>
        <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <link rel="icon" href="photo/10-1.jpg" sizes="25x25">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Denis Hoti">

    <script src="javascript/lightbox-plus-jquery.min.js"></script>
    <title>Denis Hoti || <?= $subtitle ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZQV5F5DQN9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZQV5F5DQN9');
    </script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  </head>
  <body>
        <?php 
            include "parts/googleTagManager.php";
        ?> 
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="./.">Back</a>
      </div>
      <div style="position: center;margin-right: 30%" class="col-4 text-center">
        <a style="position: center;" class="blog-header-logo text-dark" href="./blog.php">Denis Hoti | Blog</a>
      </div>
 <!--     <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>-->
    </div>
  </header>
  <br>
  <br>
 <div class="blog-post">
        <h2 class="blog-post-title"><?= $title ?></h2>
        <p class="blog-post-meta"><?= $date ?> by <a target="_blank" href="https://www.instagram.com/denishotiii">Denis Hoti</a></p>
        <img src="images/<?= $banner ?>" class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 aa1">
        <br>
        <br>
        <p><?= $content ?></p>
        <hr>
            <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">Twitter</a></li>
         <li><a href="https://www.instagram.com/denishotiii">Instagram</a></li>
        </ol>
      </div>
    </aside>

  </div>

</main>

<footer class="blog-footer">
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="javascript/gallery.js"></script>
</body>
</html>
<?php }  ?>