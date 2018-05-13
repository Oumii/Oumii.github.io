 <?php
    $host = "localhost";
    $user = "root";
    $password = "14120";
    $database = "powerhouse";
    $connect = mysqli_connect($host,$user,$password,$database);
    $query = "SELECT * from club";
    $result = $connect->query($query);
    $query1 = "SELECT * from club where id =1";
    $result1 = $connect->query($query1);
    $query2 = "SELECT * from pricing";
    $result2 = $connect->query($query2);
    $query3 = "SELECT * from pricing where id =1";
    $result3 = $connect->query($query3);
     $query4 = "SELECT * from programs";
    $result4 = $connect->query($query4);
    $query5 = "SELECT * from programs where id =1";
    $result5 = $connect->query($query5);
    $query6 = "SELECT * from header";
    $result6 = $connect->query($query6);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PowerHouse</title>

    <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	  <link href="style.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/animate.min.css">
      <!=====================================================================>
      <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <!-- NAVIGATION -->
	  <div id="myNabar" class="navbar navbar-default navbar-fixed-top" role="navigation">
	     <div class="container-fluid">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
				</button>
				<!-- create a logo here if you want -->
			    
			</div> 
			 <div class="navbar-collapse">
				<img src="images/top.png" height="100" class="img-rounded img-responsive">
			    <ul class="nav navbar-nav navbar-right" style="margin-right: 23%;">					
				    <li ><a href="#header" style="color: white;">Home</a></li>
					<li><a href="#Clubs" style="color: white;">Clubs</a></li> 
					<li><a href="#Subscription" style="color: white;">Subscription</a></li> 
					<li><a href="#Programs" style="color: white;">Programs</a></li>
					<li><a href="#Activities" style="color: white;">Activities</a></li> 
					<li><a href="#Contact" style="color: white;">Contact</a></li> 
					<li><a href="espaceC.php" style="color: white;">Login</a></li> 
				</ul>
			 </div>
		 </div>
	  </div>
<!-- END NAVIGATION ------->
<!---------- HEADER ----------->
<!-- -->
<?php while ($row = $result6->fetch_assoc()) {?>
	  <div id="header" class="header" style="background-image:url(<?php echo $row['url_img']  ?>);">
	     <div class="container-fluid">
		     <div class="row">
			    <div class="col-lg-6 col-md-6 wow bounceInLeft" data-wow-delay="1s" style="margin-top: 100PX;">
			    	
				    <h1><?php echo $row['title']  ?></h1>
			         <?php echo $row['paragraph']  ?>
					
					<a href="About/index.php"><button class="btn btn-lg btn-primary">About Us</button></a>
					<a href="Team/index2.php"><button class="btn btn-lg btn-success">Our Team</button></a>
				</div>
	 
			 </div>
		 </div>
	  </div>
<?php } ?>
<!---------- END HEADER------------->
<!---------- CLUBS------------->
<!-- -->
	  <div id="Clubs" class="Clubs">
	    <div class="container-fluid">
	    	<?php while ($row = $result1->fetch_assoc()) {?>
		     <h2><?php echo $row['title']  ?></h2>
			 <p><?php echo $row['sous_title']  ?></p>
			<?php } ?> 
           
			<div class="row">
				 <?php while ($row = $result->fetch_assoc()) {?>
			    <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="<?php echo $row['data_wow_delay']  ?>">
				    <?php echo $row['icon']; ?>
					<h4><?php echo $row['small_title']  ?></h4>
					<p><?php echo $row['paragraph']  ?></p>
					<a href="clubs/clubs.php"><button class="btn btn-lg btn-success">Show More</button></a>
				</div>
				<?php } ?>
			</div>
			
		 </div>
	  </div>
	  
<!----------------END SERVICE------------------>
<!----------------- Subscription------------------->
<!-- -->

	 <section class="pricing-section bg-6">
            <?php while ($row = $result3->fetch_assoc()) {?>
		     <h2><?php echo $row['title']  ?></h2>
			<?php } ?> 
            <div class="pricing pricing--pema">
            	<?php while ($row = $result2->fetch_assoc()) {?>
            		<form method="GET" action="buy.php">
							<?php $id = $row['id'];?>
                <div class="pricing__item">
                    <h3 class="pricing__title"><?php echo $row['type_abonn']  ?></h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span><?php echo $row['price']  ?><span class="pricing__period">/ month</span></div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature"><span class="icon icon--chart-bars"></span><?php echo $row['content1']  ?></li><br>
                        <li class="pricing__feature"><span class="icon icon--bubble"></span><?php echo $row['content2']  ?></li><br>
                        <li class="pricing__feature"><span class="icon icon--rocket"></span><?php echo $row['content3']  ?></li><br>
                        <li class="pricing__feature"><span class="icon icon--rocket"></span><?php echo $row['content4']  ?></li>
                    </ul>
                    </form>
                    <a href="<?php echo "buy.php?id=".$id."";?>" class="pricing__action">Buy</a>
                </div>
            
                <?php } ?> 
            </div>
            
        </section>
	<!----------------- END SUBSCRIPTION--------------------->
	<!------------------- PROGRAMS -------------------------->
	 <div id="Programs" class="Programs">
	    <div class="container-fluid">
		  <div class="row">
			 <?php while ($row = $result5->fetch_assoc()) {?>
		     <h2><?php echo $row['title']  ?></h2>
			 <p><?php echo $row['sous_title']  ?></p>
			<?php } ?>
			<?php while ($row = $result4->fetch_assoc()) {?>
			  <div class="col-lg-3 col-md-3 wow bounceInRight"  data-wow-delay="<?php echo $row['data_wow_delay']  ?>">
				  <div class="package">
			      <img src="<?php echo $row['url_img']  ?>" class="img-circle" alt="">
				  <h4><?php echo $row['small_title']  ?></h4>
				  <p><?php echo $row['paragraph']  ?></p>
				  <a href="Programs/programs.php"><button class="btn btn-lg btn-success">Show More</button></a>
				  </div>
			  </div>
			  <?php } ?> 
		  </div> 
		</div> 
	 </div>
	<!-------------- END PROGRAMS ------------------>
	<!--------------- Activities ------------------->
	<!-- -->
	<div class="w3-aglile-about" id="Activities">
	  <div class="w3-agile-about-grids">
	  	 <div class="w3-aglie-about-grid2">
			<div class="col-md-4 w3-about-bg-text-grid">
			
			</div>
				
			<div class="col-md-4 w3-about-text1-grid">
			<div class="w3-about-text-heads">
				<h3>PowerHouse Activities</h3>
				<h4>Exclusive</h4><br>
				<p>In powerhouse be sure that you'll find the best activities
				with the best workout gide and coaches to go with you step by step
				intel you get the best results. </p>
				<div class="w3-about-bg-head">
			<h5><a href="activities/activite.php">viewmore</a></h5>
			</div>
			</div>
			</div>
			<div class="col-md-4 w3-about-img-grid">
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
      </div>
  </div>
	<!--------------- End Activities --------------->
	<!--------------- CONTACT ---------------------->
	  <div id="Contact" class="Contact">
	    <div class="container-fluid">
		   <div class="row">
			 <h2>Contact Us</h2>
			   <p>Remember To Contact Us For Any Thing You Want To Know Just Left Us a Message</p>
			   <form action="" method="POST">
			   <div class="col-lg-6 col-md-6">
			     <div class="input-group input-group-lg">
				     <span class="input-group-addon" id="saizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					 <input type="text" class="form-control" aria-describedby="saizing-addn1" placeholder="Full Name" name="name">
				 </div>
				 <div class="input-group input-group-lg">
				     <span class="input-group-addon" id="saizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					 <input type="text" class="form-control" aria-describedby="saizing-addn1" placeholder="Email Adress" name="email">
				 </div>
				 <div class="input-group input-group-lg">
				     <span class="input-group-addon" id="saizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
					 <input type="text" class="form-control" aria-describedby="saizing-addn1" placeholder="Phone Number" name="phone">
				 </div>
			   </div>
			   <div class="col-lg-6 col-md-6">
			      <div class="input-group">
				    <textarea cols="80" rows="5" class="form-control" placeholder="Type Your Message Here" name="message"></textarea>
					  <input type="submit" name="send" value="submit your message" class="btn btn-lg">				  
					</div>
			   </div>
			   </form>
			    <?php 
                 if(isset($_POST['send']))
                 {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $msg = $_POST['message'];

                    $cmd = "INSERT INTO contact(name, email, phone, message) VALUES('$name','$email','$phone','$msg')";
                    $result = mysqli_query($connect,$cmd);
                 }
            ?>
		   </div> 
		 </div>
	  </div>
	<!--------------- END CONTACT ------------------->
	<!-- Add Google Maps -->
    <div id="googleMap" style="height:400px;width:100%;filter: grayscale(99%);">
    <script>
    function myMap() {
    var myCenter = new google.maps.LatLng(41.878114, -87.629798);
    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    }
    </script>
    </div>
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoBljere-CeemvAD0JhfPcQDQdgeUrNwI&callback=myMap"></script>
	  
	<!---------------- FOOTER ----------------------->
	<!-- -->
	<div id="Footer" class="Footer">
	   <div class="container-fluid">
		 <div class="row">	
			 <div class="col-lg-3 col-md-3">
			  <img src="images/logo.png">
		   </div>
		   <div class="col-lg-3 col-md-3">
			  <h4>Contact Us</h4>
			   <p><i class="fa fa-home" aria-hidden="true"></i>44125 W 12 Mile Rd E-123, Novi, MI 48377, États-Unis</p>
			   <p><i class="fa fa-envelope" aria-hidden="true"></i>PowerHouse@Gmail.com</p>
			   <p><i class="fa fa-phone" aria-hidden="true"></i>+212 6 70 27 75 24</p>
			   <p><i class="fa fa-globe" aria-hidden="true"></i>www.PowerHouse.com</p>
		   </div>
		   <div class="col-lg-3 col-md-3">
			 <h4>Mode Payment</h4>
			   <i class="payment fa fa-cc-mastercard" aria-hidden="true"></i>
			   <i class="payment fa fa-cc-visa" aria-hidden="true"></i>
			   <i class="payment fa fa-cc-discover" aria-hidden="true"></i>
			   <i class="payment fa fa-paypal" aria-hidden="true"></i>
		   </div>
		   <div class="col-lg-3 col-md-3">
			 <h4>STAY IN TOUCH</h4>
			   <i class="social fa fa-facebook" aria-hidden="true"></i>
			   <i class="social fa fa-twitter" aria-hidden="true"></i>
			   <i class="social fa fa-instagram" aria-hidden="true"></i>
			   <i class="social fa fa-google-plus" aria-hidden="true"></i>
			   <i class="social fa fa-google" aria-hidden="true"></i>
		   </div>
		   
		 </div>
	   </div>  
	</div>
	<!-------------------- END FOOTER ------------------->
	<!---->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
	  
	  
	  
	  
	  
	  
	  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/script.js"></script>
    <script src="assets/jquery.js"></script>
  </body>
</html>