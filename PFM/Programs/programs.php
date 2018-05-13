
<?php

	$servername = "localhost";
	$username = "root";
	$password ="14120";
	$dbname = "powerhouse";

	$con = mysqli_connect($servername,$username,$password,$dbname);

	$cmd="SELECT * FROM programs";
	$result = $con->query($cmd);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Our Programs</title>
		<meta name="description" content="A shading effect for 3D transformed elements" />
		<meta name="keywords" content="css3, transforms, shadow, shading, 3d, box shadow" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body style="background-color: #f5f5f5;">
		<div >
			<!-- Top Navigation -->
	
			<div class="codrops-top clearfix" style="background-color: #123038">
				<a class="codrops-icon codrops-icon-prev" href=""><span>Home</span></a>
				
			</div>
			

			<header class="text-center">
				<h1 style="color: #123038;font-size: 35px;">DISCOVER OUR PROGRAMS <br><span style="color: #b90b04;font-size: 20px;">All What You Need To Get The Best Training Experience</span></h1>  
			</header>
			<div class="wrapper">
				
				<ul class="stage clearfix">
					<div class="container">
						<?php while($row = $result->fetch_assoc()) {?>
						
							<div class="col-lg-6">

								<li class="scene">
									<div class="movie" onclick="return true">
										<?php echo'<div class="poster" style="background-image: url('.$row['url_img'].');"></div>';?>
										<div class="info" >
											<?php echo'<header style="background-image: url('.$row['img_desc'].');">' ;?>
												<?php echo' <h1>'.$row['small_title'].'</h1>'	;?>
											</header>
											<?php echo'<p>'.$row['description'].'</p>' ;?>
										</div>
									</div>
								</li>
							</div>					
						
						<?php }?>
					</div>
				</ul>

			</div><!-- /wrapper -->
		</div><!-- /container -->

	</body>
</html>