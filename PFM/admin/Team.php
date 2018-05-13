<?php
$host = "localhost";
$user = "root";
$password = "14120";
$database = "powerhouse";
$connect = mysqli_connect($host,$user,$password,$database);
$query = "SELECT * FROM coach";
$result = $connect->query($query);
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
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
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
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Team Table</h4>
                    </div>
                
                </div>
                 
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Team Table</h3>
                            <header>
                              <a href="insert_Team.php" class="btn btn-primary" style="margin-top: 10PX;margin-bottom: 10PX;width: 200px;margin-left: 15PX;">Add New</a>
                            </header>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">Images</th>
                                            <th class="text-center">First Name</th>
                                            <th class="text-center">Last Name</th>
                                            <th class="text-center">Adresse</th>
                                            <th class="text-center">Berth Date</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Images</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">About</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $result->fetch_assoc()) {?>
                                        <?php echo '<tr>
                                            <td class="text-center">'.$row['id'].'</td>
                                            <td class="text-center">
                                               <img class="img-circle" src="'.$row['url_img'].'" alt="" style="height : 50PX;width : 50PX;">
                                            </td>
                                            <td class="text-center">'.$row['nom_co'].'</td>
                                            <td class="text-center">'.$row['prenom_co'].'</td>
                                            <td class="text-center">'.$row['adresse_co'].'</td>
                                            <td class="text-center">'.$row['dateN_co'].'</td>
                                            <td class="text-center">'.$row['num_tel_co'].'</td>
                                            <td class="text-center">'.$row['email_co'].'</td>
                                            <td class="text-center">'.$row['paragraph'].'</td>
                                            <td>@'.$row['paragraph2'].'</td>
                                            <td>'; ?>
                                            <div class="btn-group">
                                             <a class="btn btn-tbl-edit btn-xs" href="edit_team.php?id=<?php echo $row['id'] ?>"><i class="fa fa-pencil"></i></a><br>
                                             <a class="btn btn-tbl-delete btn-xs" onclick="return confirm('are you sure you want to delete this entry')" href="Team.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php
                      if(isset($_GET['id']))
                      {
                        $id = $_GET['id'];
                        $cmd = "DELETE from coach where id ='$id'";
                        $result1 = $connect->query($cmd);
                        if ($result1) {  ?>
                          <script>
                              alert("success to delete data");
                              window.location.href="Team.php";
                          </script>
                        <?php 
                          }
                          else
                          { ?>
                              <script>
                                 alert("fail to delete data");
                                 window.location.href="Team.php";                                 
                              </script>
                         <?php }

                        ?>
                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
