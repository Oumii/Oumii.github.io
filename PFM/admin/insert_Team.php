<?php
$host = "localhost";
$user = "root";
$password = "14120";
$database = "powerhouse";
$connect = mysqli_connect($host,$user,$password,$database);
session_start(); 
      if (isset($_SESSION['id_adm'])) {
         $req = "SELECT * FROM admin WHERE id_adm = '".$_SESSION['id_adm']."'";
         $result3 = $connect->query($req);
         $row = mysqli_fetch_assoc($result3);
      }
      else
      {
        header('location:login.php');
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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Team</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="../index.php">
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
                        <a class="profile-pic" href="#"> <img src="<?php echo $row['url_img'];  ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $row['name'];  ?></b></a>
                    </li>
                     <li>
                        <a class="profile-pic" href="logout.php"><b class="hidden-xs">Logout</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="clubs.php" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Clubs</a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="Team.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Team</a>
                    </li>
                    <li>
                        <a href="programs.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Programs</a>
                    </li>
                    <li>
                        <a href="salle.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Salles</a>
                    </li>
                    <li>
                        <a href="activite.php" class="waves-effect"><i class="fa fa-bicycle fa-fw" aria-hidden="true"></i>Activities</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                insert Team
              </header>
              <div class="panel-body">
                <form action='' method="POST">
                  <div class="form-group">
                     <label for="name" class="control-label col-lg-2"> First_Name</label>
                     <input type="text" class="form-control" name="Fname">
                  </div> 
                  <div class="form-group">
                     <label for="name" class="control-label col-lg-2">Last Name </label>
                     <input type="text" class="form-control" name="Lname">
                  </div> 
                  <div class="form-group">
                     <label for="image" class="control-label col-lg-2"> Adresse</label>
                     <input type="text" class="form-control" name="Adresse">
                  </div> 
                  <div class="form-group">
                     <label for="bdate" class="control-label col-lg-2"> Birth date</label>
                     <input type="date" class="form-control" name="Bdate">
                  </div> 
                  <div class="form-group">
                     <label for="phone" class="control-label col-lg-2"> Phone</label>
                     <input type="text" class="form-control" name="Phone">
                  </div> 
                  <div class="form-group">
                     <label for="email" class="control-label col-lg-2"> Email</label>
                     <input type="email" class="form-control" name="Email">
                  </div>  
                  <div class="form-group">
                     <label for="image" class="control-label col-lg-2"> Image</label>
                     <input type="file" class="form-control" name="Image">
                     <input type="hidden" name="local" value="http://localhost/PFM/images/">
                  </div>       
                  <div class="form-group">
                    <label for="days" class="control-label col-lg-2">Description</label>
                     <textarea class="form-control" rows="8" cols="10" name="desc"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="days" class="control-label col-lg-2">About</label>
                     <textarea class="form-control" rows="8" cols="10" name="about"></textarea>
                  </div>
                  <div class="form-group">
                     <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Save" style="width: 100%;">
                  </div>   
                 </form> 
                  <?php
                    if (isset($_POST['submit'])) {
                      $fname=$_POST['Fname'];
                      $lname=$_POST['Lname'];
                      $adresse=$_POST['Adresse'];
                      $bdate=$_POST['Bdate'];
                      $phone=$_POST['Phone'];
                      $email=$_POST['Email'];
                      $image=$_POST['local'].$_POST['Image'];
                      $description=$_POST['desc'];
                      $About=$_POST['about'];
     
                    $query2 = "INSERT INTO coach(nom_co,prenom_co,adresse_co,dateN_co,num_tel_co,email_co,url_img,paragraph,paragraph2) VALUES('$fname','$lname','$adresse','$bdate','$phone','$email','$image','$description','$About')";
                    $result2 = mysqli_query($connect,$query2);
         
        }
      
      
     
    ?>
                </div>
              </div>
            </section>
          </div>
        </div>
           </div>
        </div>
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
