<?php
$host = "localhost";
$user = "root";
$password = "14120";
$database = "powerhouse";

$connect = mysqli_connect($host,$user,$password,$database);

$cmd = "SELECT * FROM pricing WHERE id ='".$_GET["id"]."'";
$result = mysqli_query($connect, $cmd);
 session_start(); 
      if (isset($_SESSION['id_memb'])) {
         $req = "SELECT * FROM member WHERE id_memb = '".$_SESSION['id_memb']."'";
         $result2 = $connect->query($req);
         $row = mysqli_fetch_assoc($result2);
      }
      else
      {
        header('location:loginC.php');
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Buy Now</title>
    <link href="admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="admin/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="admin/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="admin/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="admin/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="stylesing.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

</head>

<body class="fix-header">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="" alt="home" class="dark-logo" /><!--This is light logo text--><img src="" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                     <li>
                        <a class="profile-pic" href="logoutC.php"><b class="hidden-xs">Logout</b></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <form class="form-horizontal" role="form" action="" method="POST" style="margin-top: 10%">
                    <h2 style="text-align: center;">Welcome to our checkout.</h2>
                    
                     
                            <input type="hidden"  name="Name" value=" <?php echo $row['nom_memb']; ?> " >
                            <input type="hidden"   name="id_mem" value=" <?php echo $row['id_memb']; ?> " > 
                            <?php while ($row3 = mysqli_fetch_assoc($result)) {?>                 
                                <input type="hidden"  name="abonn" value="<?php echo $row3["type_abonn"];?> " >
                                <input type="hidden"  name="Price" value=" <?php echo $row3["price"]; ?> " >
                            <?php }?>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">payment method</label>
                        <div class="col-sm-9">
                            <select class="col-sm-3 control-label" style="width: 100%;" name="card">
                                <option value="--Select paymeny method--">--Select paymeny method--</option>
                                <option value="mastercard">mastercard</option>
                                <option value="visa card">visa card</option>
                            </select>
                            
                        </div>                 
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Card Number</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" required  name="numb">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">CVC</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="ex.311" class="form-control" required name="cvc">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Expiration</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="MM" required name="expiration">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Year</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="YYYY" class="form-control" required name="year">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="submit" value="Buy Now" class="btn btn-primary btn-block" style="background-color: #b90b04 ; border-color: #b90b04">
                        </div>
                    </div>
                </form>
            <?php 
                 if(isset($_POST['submit']))
                 {
                    $name = $_POST['Name'];
                    $id = $_POST['id_mem'];
                    $card = $_POST['card'];
                    $num = $_POST['numb'];
                    $CVC = $_POST['cvc'];
                    $exp = $_POST['expiration'];
                    $Year = $_POST['year'];
                    $prc = $_POST['Price'];
                    $abon = $_POST['abonn'];
                    

                    $cmd3 = "INSERT INTO payement(id_memb, mode_pay, date_pay, num_carte, cvc, expiration, year, name_card, abonnement, price) 
                    VALUES('$id','$card',NOW(),'$num','$CVC','$exp','$Year','$name','$abon','$prc')";

                    $result3 = mysqli_query($connect,$cmd3);

                    if($result3){ ?>

                     <script>
                       alert("payment successful");
                       window.location.href="espaceC.php";
                      </script>

                    <?php } 
                
                 }
            ?>

            </div>
        </div>
    </div>
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="admin/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="admin/js/waves.js"></script>
    <!--Counter js -->
    <script src="admin/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="admin/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="admin/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="admin/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="admin/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="admin/js/custom.min.js"></script>
    <script src="admin/js/dashboard1.js"></script>
    <script src="admin/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>