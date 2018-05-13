<?php 

    $servername = "localhost";
    $username = "root";
    $password ="14120";
    $dbname = "powerhouse";
    $con = mysqli_connect($servername,$username,$password,$dbname);
$cmd1 = "SELECT * FROM salle";
    $result1 = $con->query($cmd1);  

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link href="stylesing.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	
<title>Sign up</title>
</head>

<body>
	
	<div class="container">
            <form class="form-horizontal" role="form" action="" method="POST">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus required name="first">
                      
                    </div>                 
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus required name="last">
                        
                    </div>                 
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Adress</label>
                    <div class="col-sm-9">
                        <input type="text" id="adress" placeholder="Adress" class="form-control" required name="adress">
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" required name="date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="Phone" class="form-control" required name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" required name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="Username" class="form-control" required name="user">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" required name="pass">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <select class="col-sm-3 control-label" style="width: 100%;" name="city">
                            <option>--Select  your city--</option>
                            <?php while($row = $result1->fetch_assoc()) {?>

                                <?php echo'<option value="'.$row['immatricule_salle'].'" >'.$row['ville_salle'].'</option>';?>

                            <?php }?>
                        </select>
                    </div>
                </div>
               
                
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#" style="color: #b90b04">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block" style="background-color: #b90b04 ; border-color: #b90b04">
                    </div>
                </div>
            </form> <!-- /form -->

            <?php 
                 if(isset($_POST['submit']))
                 {
                    $first = $_POST['first'];
                    $last = $_POST['last'];
                    $adress = $_POST['adress'];
                    $date = $_POST['date'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $city = $_POST['city'];
                    

                    $cmd = "INSERT INTO member( nom_memb, prenom_memb, adresse_memb, dateN_memb, tel_memb, email_memb, login_memb, pass_memb, immaticule_salle) VALUES('$first', '$last', '$adress', '$date', '$phone', '$email', '$user', '$pass', '$city')";

                    $result = mysqli_query($con,$cmd);
                 }
            ?>
        </div> <!-- ./container -->
</body>
</html>
