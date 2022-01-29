<!DOCTYPE html>
<html lang="en">
    <head>
		<?php 
			include "parts/head.php";
		?>
        <title>Denis Hoti | Work</title>
    </head>
    <body style="overflow-x: hidden;">

		<?php 
            include "parts/googleTagManager.php";
        ?> 

    
        <div class="nav-container">
            <?php 
            	include "parts/header.php";
            ?> 
        </div>
	
        <div class="s1" id="projects">
		<div class="main-container">
			<h3 style="text-align: center;">All my projects</h3>

			<div class="post-wrapper">
			<?php
				include "./config.php";
				$select = "SELECT * FROM work order by wId DESC";
				$query = mysqli_query($connect, $select);
			
				while( $row = mysqli_fetch_array($query))
				{
					$wId = $row['wId'];
					$banner = $row['wBanner'];
					$title = $row['wTitle'];
					$description = $row['wDescription'];
					$link = $row['wLink'];
					$github = $row['wGithub']
			?> 

				<div class="post">
					<img class="thumbnail" src="images/<?= $banner ?>">
					<div class="post-preview">
						<h6 class="post-title"><?= $title ?></h6>
						<p class="post-intro"><?= $description ?></p>
						<a class="post-links post-links-1" href="<?= $link ?>" target="_blank"><i class="fab fa-internet-explorer"></i></a>
						<a class="post-links post-links-2" href="<?= $github ?>" target="_blank"><i class="fab fa-github"></i></a>
					</div>
				</div>
				<?php 
					}
				?>
	
		</div>
	</div>

		</div>
		<h4 style="text-align: center;"><a href="https://github.com/denishotii?tab=repositories" target="_blank">More projects -></a></h4>
	</div>

	<footer class="transition3">
            <?php
                include "parts/footer.php"
            ?>
        </footer>
    </body>
</html>