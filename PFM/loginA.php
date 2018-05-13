<?php
$host = "localhost";
$user = "root";
$password = "14120";
$database = "powerhouse";
$connect = mysqli_connect($host,$user,$password,$database);
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	  <link href="admin/LoginStyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">

  </head>
  <body>
	  
	  
	   <div class="container">

      <form class="form-signin" method="POST">
		  <p style="width: 100PX;height: 100PX;margin-left: 34%;margin-bottom: 20PX;font-size: 35PX;">Login</p>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button><br>
		    <p class="p" style="color: gray;margin-left: 45%;">OR</p><br>
		    
      </form>
     <a href="sign/signup.php"><button  class="btn btn-lg btn-primary btn-block" type="submit" style="width: 300PX;margin-left: 37%;margin-top: 10PX;">Sign up</button></a>
    </div>
    <?php
     $msg = "";
     if (isset($_POST['login'])) {
        $result = mysqli_query($connect,"SELECT * FROM member WHERE login_memb='".$_POST['username']."'and pass_memb = '".$_POST['password']."'");
        $row = mysqli_fetch_array($result);
        if (is_array($row)) {
          
           $_SESSION['id_memb']=$row['id_memb'];
           header("location:activities/activite.php");
           
        }
        else
        { ?>
          <script>
                alert("invalid username or password!");
          </script>
        <?php 
        }

     }
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>