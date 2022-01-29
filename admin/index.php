<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=No Admin Logged in");
    }else{
?>
<html>


<head>
        <title>Denis Hoti | Admin Panel</title>
        <script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/header.css">

</head>
<body>
		<?php 
			include "./parts/header.php";
		?>

        </body>
        <?php 
    }
        ?>
</html>