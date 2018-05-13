<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Morphing Page Transition | Demo 1 | Codrops</title>
		<meta name="description" content="A page transition where one SVG path is morphed into another" />
		<meta name="keywords" content="page transition, svg, morph, path, javascript, web design, web dev" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Spectral:200" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="pater/pater.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body class="demo-1 loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>

		</svg>
		<main>
			<div class="content content--intro">
				<div class="frame">
					<header class="codrops-header">
						<div class="codrops-links">
							<a class="codrops-icon codrops-icon--prev" href="../index.php" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						</div>
						<h1 class="codrops-header__title" style="color: white;">Back Home</h1>
					</header>
				</div>
				<div class="content__inner">
					<h2 class="content__title">About PowerHouse</h2>
					<h3 class="content__subtitle">Know more about our gym</h3>
					<a href="#" class="enter">explore</a>
					
				</div>
				<div class="shape-wrap">
					<svg class="shape" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800" xmlns:pathdata="http://www.codrops.com/">
						<path d="M -44,-50 C -52.71,28.52 15.86,8.186 184,14.69 383.3,22.39 462.5,12.58 638,14 835.5,15.6 987,6.4 1194,13.86 1661,30.68 1652,-36.74 1582,-140.1 1512,-243.5 15.88,-589.5 -44,-50 Z" pathdata:id="M -44,-50 C -137.1,117.4 67.86,445.5 236,452 435.3,459.7 500.5,242.6 676,244 873.5,245.6 957,522.4 1154,594 1593,753.7 1793,226.3 1582,-126 1371,-478.3 219.8,-524.2 -44,-50 Z"></path>
					</svg>
				</div>
			</div><!-- /content -->
			<div class="content content--fixed">
				<div class="content__inner">
					<nav class="menu">
						<a class="menu__item" style="color: dimgrey;"><h2>POWERHOUSE GYMS INTERNATIONAL</h2>
                                              <h3>THE LEADER IN FITNESS!</h3>
                        </a>
						<a class="menu__item">
					     	The Powerhouse Gym name and brand has been one of the top leaders in the fitness industry for over 40 years. With 300 licensees in 39 states, Powerhouse has continued to steadily gain global attention by expanding into 17 different countries worldwide. The first Powerhouse Gym still stands in its original location and celebrated its 40th anniversary in 2014.
                            The Powerhouse Gym name and logo provides its gyms instant recognition and credibility associated with an internationally registered trademark and service mark symbolic with quality in the health and fitness industry.
                            Today, Powerhouse Gyms International is in the midst of tremendous growth and expansion. One reason for this surge in membership and facilities has been Powerhouse Gym’s ability to not only accommodate the conditioned market, but to also attract mainstream consumers and fitness enthusiast by providing excellent fitness facilities. The famous muscleman logo is a sign of credibility across the country and is a testament of where this company began. The Powerhouse Gym Trademark is associated with service and quality, and is apparent throughout each and every Powerhouse Gym that opens its doors to over 1.2 million dedicated members.
                            It is not uncommon to see an A-list celebrity training at Powerhouse Gym, including such stars as Arnold Schwarzenegger, Cameron Diaz, John Travolta, Jerome “The Bus” Bettis, Alex Rodriguez, Mike Tyson and Dwayne “The Rock” Johnson, to name a few.
					    </a>
					</nav>
					<a class="next-demo" href="index.html">Back<svg class="icon icon--arrow-left"><use xlink:href="#icon-arrow"></use></svg></a>
				</div>
			</div>
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/charming.min.js"></script>
			<script src="js/anime.min.js"></script>
			<script src="js/demo1.js"></script>
		</main>
	</body>
</html>
