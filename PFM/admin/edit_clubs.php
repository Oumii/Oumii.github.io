<?php
    $server = "localhost";
    $username = "root";
    $password = "14120";
    $dbname = "powerhouse";

    //Create connection 
    $connect = mysqli_connect($server, $username, $password, $dbname);
    $cmd = "SELECT * FROM club WHERE id = '".$_GET["id"]."'";
    $result = mysqli_query($connect, $cmd);

    session_start(); 
      if (isset($_SESSION['id_adm'])) {
         $req = "SELECT * FROM admin WHERE id_adm = '".$_SESSION['id_adm']."'";
         $result2 = $connect->query($req);
         $row1 = mysqli_fetch_assoc($result2);
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
    <title>Admin || Clubs</title>
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
                        <a class="profile-pic" href="#"> <img src="<?php echo $row1['url_img']; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $row1['name'] ?></b></a>
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
          <form method="POST" action="">
          <div id="page-wrapper">
              <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading">
                        Add Clubs
                        </header>
                        <div class="panel-body"> 
                        <?php while ($row = mysqli_fetch_assoc($result)) {?>      
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Name</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $row["small_title"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Description</label>
                            <input type="text" class="form-control" name="desc" value="<?php echo $row["description"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Icon</label>
                            <input type="text" class="form-control" name="icon" value="<?php echo $row["icon"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Data Wow Delay</label>
                            <input type="text" class="form-control" name="datawow" value="<?php echo $row["data_wow_delay"];?>">
                          </div>
                          <div class="form-group">
                             <label for="image" class="control-label col-lg-2">Image 1</label>
                             <input type="file" class="form-control" name="img1" value="<?php echo $row["img_1"];?>" >
                             <input type="hidden" name="local" value="http://localhost/PFM/images/">
                             <input type="hidden" name="title" value="">
                             <input type="hidden" name="sous_title" value="">
                             <input type="hidden" name="paragraph" value="">
                          </div>
                          <div class="form-group">
                             <label for="image" class="control-label col-lg-2">Image 2</label>
                             <input type="file" class="form-control" style="margin-bottom: 10px;" name="img2" value="<?php echo $row["img_2"];?>">
                          </div>
                          <?php }?>
                          <div class="form-group">
                             <input class="btn btn-lg btn-primary" type="submit" name="edit" value="Edit" style="width: 100%;">
                          </div>                  
                        </div>
                      </section>
                    </div>
                  </div>
              </div>
          </div>
          </form>
        </div>
                  <?php
                            if(isset($_POST['edit']))
                            {
                                $name = $_POST['name'];
                                $desc = $_POST['desc'];
                                $icon = $_POST['icon'];
                                $img = $_POST['local'].$_POST['img1'];
                                $img1 = $_POST['local'].$_POST['img2'];
                                $title = $_POST['title'];
                                $sous_title = $_POST['sous_title'];
                                $paragraph = $_POST['paragraph'];
                                $datawow = $_POST['datawow'];


                                $sql = "UPDATE club SET small_title = '$name' , description = '$desc' , img_1 = '$img' , img_2 = '$img1', icon = '$icon', data_wow_delay = '$datawow' WHERE id ='".$_GET["id"]."'";
                                $result = mysqli_query($connect,$sql);
                            }
                        ?>
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
