<?php
$host = "localhost";
$user = "root";
$password = "14120";
$database = "powerhouse";
$connect = mysqli_connect($host,$user,$password,$database);
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
    <title>Profile</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?php echo $row1['url_img']; ?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $row1['username']; ?></h4>
                                        <h5 class="text-white"><?php echo $row1['email']; ?></h5> </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action='' method="POST">
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $row1['name']; ?>" class="form-control form-control-line" name="Name"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" value="<?php echo $row1['email']; ?>" class="form-control form-control-line" name="Email"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $row1['password']; ?>" class="form-control form-control-line" name="Password"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">User name</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $row1['username']; ?>" class="form-control form-control-line" name="Username" > 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Profiles Photos</label>
                                    <div class="col-md-12">
                                        <input type="file" value="<?php echo $row1['url_img']; ?>" class="form-control form-control-line" name="Image"> 
                                        <input type="hidden" name="local" value="http://localhost/PFM/admin/images/users/">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Update Profile" class="btn btn-success" name="submit">
                                    </div>
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['submit'])) {
                                $name=$_POST['Name'];
                                $email=$_POST['Email'];
                                $password=$_POST['Password']; 
                                $username=$_POST['Username'];
                                $image=$_POST['local'].$_POST['Image'];   
                                   $query3 = "UPDATE admin SET name='".$name."',email='".$email."',password='".$password."',username='".$username."',url_img='".$image."' WHERE id_adm=".$_SESSION['id_adm'];
                                   $result3 = mysqli_query($connect,$query3);
                                }
                            ?>
                        </div>
                        <div class="white-box">
                            <h3 style="text-align: center;">Add New Admin</h3>
                            <form class="form-vertical form-material" method="POST" action="">
                                <div class="form-group">
                                    <label for="days" class="control-label col-lg-2">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="days" class="control-label col-lg-2">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="days" class="control-label col-lg-2">Username</label>
                                    <input type="text" class="form-control" name="user">
                                </div>
                                <div class="form-group">
                                    <label for="days" class="control-label col-lg-2">Password</label>
                                    <input type="password" class="form-control" name="pass">
                                </div>
                                <div class="form-group">
                                    <label for="days" class="control-label col-lg-2">Image</label>
                                    <input type="file" class="form-control" name="img1">
                                    <input type="hidden" name="local" value="http://localhost/PFM/images/">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-primary" type="submit" name="add" value="Add User" style="width: 100%;">
                                </div>
                            </form>

                            <?php
                            if(isset($_POST['add']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $img = $_POST['local'].$_POST['img1'];


                                $sql = "INSERT INTO admin(name, email, username, password, url_img) VALUES ('$name', '$email', '$user', '$pass', '$img')";
                                $result = mysqli_query($connect,$sql);
                            }
                        ?>
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
