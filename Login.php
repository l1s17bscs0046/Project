<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

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
                    <a class="nav-link" href="Login.php" class="text-dark"><font color="white"><i class="fas fa-key"></i> Login</font> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="AboutUs.php" class="text-dark"><font color="white"><i class="fas fa-address-card"></i> About</font><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ContactUs.php" class="text-dark"><font color="white"><i class="fas fa-mobile-alt"></i> Contact</font><span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary btn-lg active btn btn-secondary btn-sm my-2 my-sm-0" type="submit">Go</button>
            </form>
        </div>
    </nav>

</header>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12">
            <img src="Pics/Pic1.jpg" class="container-fluid" width=100% height=100%>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12">
            <h1 class="text-center my-5"><i class="fas fa-user-lock fa-md"></i> <span class="d-none d-sm-inline"> </span>
                Login
            </h1>
            <h6 class="text-center my-3"><i class="fas fa-user-tie fa-md"></i><span class="d-none d-sm-inline"> </span>
                Login as Admin
            </h6>
            <form action="" method="post" id="loginForm" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-3 col-xs-2 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> </span>
                            Email:</label>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-8 col-sm-8 col-xs-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="email" class="form-control" id="pro_email" name="pro_email" required
                                   placeholder="Enter Email">
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
                            <input type="password" minlength="5" class="form-control" id="pro_password" name="pro_password" required placeholder="Enter Password">
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-xl-4"></div>
                    <div class="col-xl-4">
                        <p align="center"><a href="ForgotPassword.php"><font size="2">Forgot Password</font> </a> </p>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="d-none d-sm-block col-sm-3 col-md-3 col-lg-4 col-xl-3 mt-auto"></div>
                    <div class="col-sm-8 col-md-8 col-lg-5 col-xl-6">
                        <button type="submit" name="insert_pro" onclick="myfunction()" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i>
                            Login
                        </button>
                    </div>
                </div>

            </form>

            <div class="row my-3">
                <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    <p align="center"><span class="d-none d-sm-none d-md-inline"> Don't have an Account? </span><a href="Register.php">Sign Up</a> </p>
                </div>
            </div>


            <script src="loginUsers.js"></script>
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