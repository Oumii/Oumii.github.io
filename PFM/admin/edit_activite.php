<?php
    $server = "localhost";
    $username = "root";
    $password = "14120";
    $dbname = "powerhouse";

    //Create connection 
    $connect = mysqli_connect($server, $username, $password, $dbname);

    $cmd = "SELECT * FROM activite,coach,salle WHERE id_activ = '".$_GET["id"]."'";
    $result = mysqli_query($connect, $cmd);
    $row = mysqli_fetch_assoc($result);


    $cmd1 = "SELECT * FROM coach";
    $result1 = mysqli_query($connect, $cmd1);


    $cmd3 = "SELECT * FROM salle";
    $result3 = mysqli_query($connect, $cmd3);

    

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
    <title>Admin || Activities</title>
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
                        <!--This is dark logo icon--><img src="i" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="" alt="home" class="light-logo" />
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
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="Team.php" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Team</a>
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
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Name</label>
                             <input type="text" class="form-control" name="name" value="<?php echo $row["nom_activ"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Description</label>
                            <!--<input type="text" class="form-control" name="desc" value="<?php echo $row["description"];?>">-->
                            <textarea rows="4" class="form-control" name="desc" value="<?php echo $row["description"];?>" ><?php echo $row["description"];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Start at</label>
                            <input type="text" class="form-control" name="start" value="<?php echo $row["heureD_activ"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">End at</label>
                            <input type="text" class="form-control" name="end" value="<?php echo $row["heureF_activ"];?>">
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Coach</label>
                            <select name="coach" class="form-control">
                              <?php while($row = mysqli_fetch_assoc($result1)) {?>
                              <?php echo '<option>'.$row['id'].'</option>';?>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="days" class="control-label col-lg-2">Salle</label>
                            <select name="salle" class="form-control">
                              <?php while($row = mysqli_fetch_assoc($result3)) {?>
                              <?php echo '<option>'.$row['immatricule_salle'].'</option>';?>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                             <label for="image" class="control-label col-lg-2">Image</label>
                             <input type="file" class="form-control" name="img" value="<?php echo $row["img"];?>" >
                             <input type="hidden" name="local" value="http://localhost/PFM/images/">
                          </div>
                          <div class="form-group">
                             <input class="btn btn-lg btn-primary" type="submit" name="edit" value="Edit" style="width: 100%;"></div>
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
                                $start = $_POST['start'];
                                $end = $_POST['end'];
                                $img = $_POST['local'].$_POST['img'];
                                $coach = $_POST['coach'];
                                $salle = $_POST['salle'];


                                $sql = "UPDATE activite SET nom_activ = '$name' , description = '$desc' , heureD_activ = '$start' , heureF_activ = '$end', coach = '$coach', num_salle = '$salle', img = '$img' WHERE id_activ ='".$_GET["id"]."'";
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
