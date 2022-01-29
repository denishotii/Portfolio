<!DOCTYPE html>
<html lang="en">
    <head>
		<?php 
			include "parts/head.php";
		?>
        <title>Denis Hoti | Skills</title>
    </head>
    <body>

		<?php 
            include "parts/googleTagManager.php";
        ?> 

    
        <div class="nav-container">
             <?php 
                include "parts/header.php";
            ?> 
        </div>

<div class="all-skills">
<div class="skills section s2" id="skills">
	<div class="skills">
			<h1 style="color: white;">My Skills</h1>
		<div class="skills-1">	

			<?php
				include "./config.php";
				$select = "SELECT * FROM skills";
				$query = mysqli_query($connect, $select);
			
				while( $row = mysqli_fetch_array($query))
				{
					$sId = $row['sId'];
					$name = $row['sName'];
					$percentage = $row['sPercentage'];
			?> 

			<li>
				<h3><?= $name ?></h3><span class="bar"><span class="<?= $percentage ?>"></span></span>
			</li>

			<?php 
				}
			?>
		</div>
	</div>
    </div>
</div>
    </body>
</html>