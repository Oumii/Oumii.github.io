
<?php

	$servername = "localhost";
	$username = "root";
	$password ="14120";
	$dbname = "powerhouse";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	$cmd = "SELECT * FROM activite";
	$result = mysqli_query($conn, $cmd);

	$cmd3 = "SELECT * FROM member";
	$result3 = mysqli_query($conn, $cmd3);

	session_start(); 
      if (isset($_SESSION['id_memb'])) {
         $req = "SELECT * FROM member WHERE id_memb = '".$_SESSION['id_memb']."'";
         $result2 = $conn->query($req);
         $row1 = mysqli_fetch_assoc($result2);  
      }
      else
      {
        header('location:../loginA.php');
      }

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Our Activities</title>
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
				<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Home</span></a>
				
			</div>
			

			<header class="text-center">
				<h1 style="color: #123038;font-size: 35px;">DISCOVER OUR ACTIVITIES <br><span style="color: #b90b04;font-size: 20px;">Choose The Best Activity For You</span></h1>  
			</header>
			<div class="wrapper">
				
				<ul class="stage clearfix">
					<div class="container">
						<?php while($row = mysqli_fetch_assoc($result)) {?>
							
						<form method="GET" action="">
							<div class="col-lg-6">

								<li class="scene">
									<div class="movie" onclick="return true">
										<?php echo'<div class="poster" style="background-image: url('.$row['img'].');"></div>';?>
										<div class="info" >
											<?php echo'<header style="background-image: url('.$row['img'].');">' ;?>
												<?php echo' <h1>'.$row['nom_activ'].'</h1>'	;?>
											</header>
											<?php echo'<p>'.$row['description'].'</p>' ;?>
											<a class="btn btn-tbl-delete btn-xs" onclick="return confirm('are you sure ?')" href="activite.php?id=<?php echo $row['id_activ']?>&nom=<?php echo $row['nom_activ'] ?>&member=<?php echo $row1['id_memb'];?>">
                                                <i class="fa fa-trash-o">PARTICIPATE</i>
                                            </a>
										</div>
									</div>
								</li>
							</div>
												
						</form>
						<?php }?>


						<?php
                                              if(isset($_GET['id']))
                                              {
                                              	$id= $_GET['member'];
                                                $nom = $_GET['nom'];
                                                $cmd = "INSERT INTO participation(activite, member) VALUES('$nom','$id')";
                                                $result1 = $conn->query($cmd);
                                                if ($result1) {  ?>
                                                  <script>
                                                      alert("success to participate");
                                                      window.location.href="activite.php";
                                                  </script>
                                                <?php 
                                                  }
                                                  else
                                                  { ?>
                                                      <script>
                                                         alert("fail to participate");
                                                         window.location.href="activite.php";                                 
                                                      </script>
                                                  
                                                 <?php 
                                             }

                                                }

                                               ?>
					</div>
				</ul>

			</div><!-- /wrapper -->
		</div><!-- /container -->

	</body>
</html>