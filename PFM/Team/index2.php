 <?php
    $host = "localhost";
    $user = "root";
    $password = "14120";
    $database = "powerhouse";
    $connect = mysqli_connect($host,$user,$password,$database);
    $query = "SELECT * from coach";
    $result = $connect->query($query);
    $query1 = "SELECT * from coach";
    $result1 = $connect->query($query1);

  ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>PowerHouse Team</title>
		<meta name="description" content="3D Grid Effect: Recreation of the effect seen in the prototype app by Marcus Eckert | Demo 2" />
		<meta name="keywords" content="3d, grid, effect, flip, css transform, perspective, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body class="demo-2" style="background-image: url(img/image-5.jpg);background-size: cover;">
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="../index.php" style="color: #B90B04;"><span>Back Home</span></a>
				
			</div>
			<header class="codrops-header">
				<h1 style="color: #B90B04;">Meet Our Team <span>The best coachs <a>for the best workout</a></span></h1>
				
			</header>
			<section class="grid3d horizontal" id="grid3d">
				<div class="grid-wrap">
					
					<div class="grid">
						<?php while ($row = $result->fetch_assoc()) {?>
						<figure><img src="<?php echo $row['url_img']; ?>" alt="img04"/></figure>
					    <?php } ?>
					</div>
					 
				</div><!-- /grid-wrap -->
				<div class="content">
					<?php while ($row1 = $result1->fetch_assoc()) {?>
					<div>
						<div class="dummy-img" style="background-image: url(<?php echo $row1['url_img']; ?>);background-size: cover;"></div>
						<p style="color: grey;text-align: center;"><?php echo $row1['paragraph']; ?></p>
						<p style="color: grey;"><?php echo $row1['paragraph2']; ?></p>
					</div>
					<?php } ?>
					<span class="loading"></span>
					<span class="icon close-content"></span>
					
				</div>
				
			</section>
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/helper.js"></script>
		<script src="js/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
	</body>
</html>