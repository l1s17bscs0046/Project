<?php
session_start();
if(isset($_SESSION['user_email'])){
    header('location: home.php');
}
$con = mysqli_connect("localhost","root","","online_study");
if(!$con)
    die("Connection failed");
$error_msg = '';
if(isset($_POST['admin_login'])){

    $email = $_POST['adm_email'];
    $pass = $_POST['adm_pass'];


    $sel_admin = "select * from admins where username='$email' AND password='$pass'";
    $run_admin = mysqli_query($con, $sel_admin);
    $check_admin = mysqli_num_rows($run_admin);
    if($check_admin==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['adm_email'] = $email;
        setcookie('adm_email','' );
        setcookie('adm_pass', '');

        header('location:Admin_panel.php?logged_in=You have successfully logged in!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="CSS/BootStrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="index.php"><font color="white"><i class="fas fa-home"></i>Home</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" class="text-dark"><font color="white"><i class="fas fa-key"></i> Login</font> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="AboutUs.php" class="text-dark"><font color="white"><i class="fas fa-address-card"></i> About</font><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ContactUs.php" class="text-dark"><font color="white"><i class="fas fa-mobile-alt"></i> Contact</font><span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary btn-lg active btn btn-secondary btn-sm my-2 my-sm-0" type="submit">Go</button>
            </form>-->
        </div>
    </nav>

</header>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4">
            <img src="Pics/Pic2.png" class="container-fluid" width=100% height=100%>
        </div>

        <div class="col-xl-8 col-lg-8 col-md-8">
            <h1 class="text-center my-5"><i class="fas fa-user-tie fa-md"></i> <span class="d-none d-sm-inline"> </span>
                Admin
            </h1>
            <form action="Admin.php" method="post" id="loginForm" enctype="multipart/form-data">
                <div><?php echo $error_msg;?></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-3 col-xs-2 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> </span>
                            Username:</label>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-8 col-sm-8 col-xs-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="pro_email" name="adm_email" required
                                   placeholder="Enter Username">
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-3 d-none d-sm-block mt-auto">
                        <label for="pro_price" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"></span>
                            Password:</label>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-8 col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input type="password" minlength="5" class="form-control" id="pro_password" name="adm_pass" required placeholder="Enter Password">
                        </div>
                    </div>
                </div>


                <div class="row my-5">
                    <div class="d-none d-sm-block col-sm-3 col-md-3 col-lg-4 col-xl-3 mt-auto"></div>
                    <div class="col-sm-8 col-md-8 col-lg-5 col-xl-6">
                        <button type="submit" name="admin_login" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i>
                            Login
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>



<hr>
<footer>
    <p>Developed by <a href="https://github.com/l1s17bscs0046">Ahmed Asad</a></p>
    <address>
        University of Central Punjab, Lahore
    </address>
    <p> Copyrights &copy; 2019 All rights reserved. </p>
</footer>
</body>
</html>