<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header('location: index.php');
}
if(isset($_SESSION['adm_email'])){
    header('location: Admin_Panel.php');
}
$con = mysqli_connect("localhost","root","","online_study");
if(!$con)
    die("Connection failed");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <title>TechBox Admin Panel</title>
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
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

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="logo.png" width=8% height=10%> </h3>
        </div>
        <ul class="list-unstyled components">
		<li>
                <a href="home.php?stud_pro">
                    <i class="fas fa-user"></i> Student Profile
                </a>
            </li>
            <li>
                <a href="home.php?view_courses">
                    <i class="fas fa-book"></i> View Courses
                </a>
            </li>
           
            <li>
                <a href="Std_logout.php">
                    <i class="fa fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
         
				<h1 class="text-center"><b>Student Panel</b></h1>
            </div>
        </nav>
        <div class="container">
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['view_courses'])){
                include ('view_courses.php');
            }
            else if(isset($_GET['stud_pro'])){
                include ('stud_pro.php');
            }
            else if(isset($_GET['del_pro'])){
                include ('del_pro.php');
            }
			else if(isset($_GET['enroll'])){
                include ('enroll.php');
            }
            ?>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<hr>
<footer>
    <font size="2"> <p>  Developed by <a href="https://github.com/hamdacheema">Hamda cheema </a></p>
        <address>
            University of Central Punjab, Lahore
        </address>
        <p> Copyrights &copy; 2019 All rights reserved. </p> </font>
</footer>
</body>
</html>