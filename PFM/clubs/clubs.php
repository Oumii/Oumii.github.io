<?php
	$server = "localhost";
	$username = "root";
	$password = "14120";
	$dbname = "powerhouse";

	//Create connection
	$conn = mysqli_connect($server, $username, $password, $dbname);

	$cmd = "SELECT small_title, description, img_1, img_2 FROM club WHERE id in (1,3)";
	$result = mysqli_query($conn, $cmd);
	$cmd1 = "SELECT small_title, description, img_1, img_2 FROM club WHERE id in (2,4)";
	$result1 = mysqli_query($conn, $cmd1);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Clubs</title>
		<meta name="description" content="A little library that can be used for creating WebGL powered distortion hover effects using displacement images." />
		<meta name="keywords" content="webgl, hover, effect, distortion, displacement, web development, three.js" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/clubs.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<svg id="icon-github" viewBox="0 0 33 33">
				<title>github</title>
				<path d="M16.608.455C7.614.455.32 7.748.32 16.745c0 7.197 4.667 13.302 11.14 15.456.815.15 1.112-.353 1.112-.785 0-.386-.014-1.411-.022-2.77-4.531.984-5.487-2.184-5.487-2.184-.741-1.882-1.809-2.383-1.809-2.383-1.479-1.01.112-.99.112-.99 1.635.115 2.495 1.679 2.495 1.679 1.453 2.489 3.813 1.77 4.741 1.353.148-1.052.569-1.77 1.034-2.177-3.617-.411-7.42-1.809-7.42-8.051 0-1.778.635-3.233 1.677-4.371-.168-.412-.727-2.069.16-4.311 0 0 1.367-.438 4.479 1.67a15.602 15.602 0 0 1 4.078-.549 15.62 15.62 0 0 1 4.078.549c3.11-2.108 4.475-1.67 4.475-1.67.889 2.242.33 3.899.163 4.311C26.37 12.66 27 14.115 27 15.893c0 6.258-3.809 7.635-7.437 8.038.584.503 1.105 1.497 1.105 3.017 0 2.177-.02 3.934-.02 4.468 0 .436.294.943 1.12.784 6.468-2.159 11.131-8.26 11.131-15.455 0-8.997-7.294-16.29-16.291-16.29"></path>
			</svg>
		</svg>
		<main>
			<div class="grid">
						<!--1-->
						<?php while($row = $result->fetch_assoc()) { ?>
							<?php 
				echo '<div class="grid__item theme-1">
					<div class="grid__item-content" style="background-color: rgba(200,192,192,0.90);">
						<nav class="grid__item-nav">
							<a href="../index.php" class="grid__item-link">&larr; HOME</a>
						</nav>
						 
						<h2 class="grid__item-title grid__item-title--small" style="color: #605656;">'.$row['small_title'].'</h2>
						<p class="grid__item-text">'.$row['description'].'</p>
					</div>
				</div>
				<div class="grid__item grid__item--bg theme-2">
					<div class="grid__item-img" data-displacement="img/displacement/8.jpg" data-intensity="-0.65" data-speedIn="1.2" data-speedOut="1.2">
						<img src="'.$row['img_1'].'" alt="Image"/>
						<img src="'.$row['img_2'].'" alt="Image"/>
					</div>
				</div>';?>
					<!--2-->
					<?php while($row = $result1->fetch_assoc()) { ?>
					<?php 
				echo '<div class="grid__item grid__item--bg theme-3">
					<div class="grid__item-img" data-displacement="img/displacement/4.png" data-intensity="0.2" data-speedIn="1.6" data-speedOut="1.6">
						<img src="'.$row['img_1'].'" alt="Image"/>
						<img src="'.$row['img_2'].'" alt="Image"/>
					</div>
				</div>
				<div class="grid__item theme-4">
					<div class="grid__item-content" style="background-color: white;" >
						<h2 class="grid__item-title grid__item-title--small" style="color: #605656;">'.$row['small_title'].'</h2>
						<p class="grid__item-text" style="color: black;">'.$row['description'].'</p>
					</div>
				</div>';?>
				<?php break; }?>
				<?php }?>
					<!--3-->
					<!--4-->
			</div>
		</main>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/three.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
		<script src="js/hover.js"></script>
		<script>
			imagesLoaded( document.querySelectorAll('img'), () => {
				document.body.classList.remove('loading');
			});

			Array.from(document.querySelectorAll('.grid__item-img')).forEach((el) => {
				const imgs = Array.from(el.querySelectorAll('img'));
				new hoverEffect({
					parent: el,
					intensity: el.dataset.intensity || undefined,
					speedIn: el.dataset.speedin || undefined,
					speedOut: el.dataset.speedout || undefined,
					easing: el.dataset.easing || undefined,
					hover: el.dataset.hover || undefined,
					image1: imgs[0].getAttribute('src'),
					image2: imgs[1].getAttribute('src'),
					displacementImage: el.dataset.displacement
				});
			});
		</script>
	</body>
</html>