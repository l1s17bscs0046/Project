<?php
$con = mysqli_connect("localhost","root","","online_study");
if(!$con)
    die("Connection failed");
?>

<?php
if(isset($_POST['change_password'])){
    //getting text data from the fields
    $fgt_email = $_POST['fgt_email'];
    $new_pass = $_POST['fgt_pass'];
    $cfm_pass = $_POST['cfm_pass'];

    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $new_pass) && strlen($new_pass) < 8) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Password."
        );
    } else if ($new_pass !=$cfm_pass) {
        $response = array(
            "type" => "warning",
            "message" => "Password Doesn't Match."
        );
    } else {
        $get_pass = "select * from student where email='$fgt_email'";
        $run_pass = mysqli_query($con, $get_pass);
        $row_pass = mysqli_fetch_array($run_pass);
        $old_pass = $row_pass['password'];
        if ($old_pass == $new_pass) {
            $response = array(
                "type" => "warning",
                "message" => "Password has been used before."
            );
        } else {
            $update_password = "update student set password = '$new_pass'
                                        where email='$fgt_email'";
            $update_pro = mysqli_query($con, $update_password);
            if ($update_pro) {

                header("location: Login.php");
                $response = array(
                    "type" => "warning",
                    "message" => "Password Changed."
                );
            } else {
                $response = array(
                    "type" => "warning",
                    "message" => "Email doesn't Exist."
                );
            }


        }

    }
}
?>

<!DOCTYPE html>
<html lang="en" xmlns:display="http://www.w3.org/1999/xhtml" xmlns:>
<head>

    <meta charset="UTF-8">
    <title>Forgot Password</title>

    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="CSS/BootStrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <style>
        * {
            font-family: 'Vollkorn', serif;
        }
    </style>
</head>
<body class="bkg">

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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary btn-lg active btn btn-secondary btn-sm my-2 my-sm-0" type="submit">Go</button>
            </form>
        </div>
    </nav>

</header>


<h2 class="text-center my-4"><i class="fas fa-lock fa-md"></i>
    FORGOT PASSWORD
</h2>
<div class="row ">
    <div class="container-fluid">
        <?php if (!empty($response)) { ?>
            <div class="alert alert-<?php echo $response["type"]; ?>">
                <?php echo $response["message"]; ?>
            </div>
        <?php } ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-2 d-none d-sm-inline mt-auto">
                    <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> Enter </span>
                        Email:</label>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-xs-10">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                        </div>
                        <input type="email" class="form-control" id="pro_email" name="fgt_email" required
                               placeholder="Enter Email Address" >
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-2 d-none d-sm-block mt-auto">
                    <label for="pro_cat" class="float-md-right float-sm-right"><span class="d-sm-none d-md-inline"> Enter New </span>
                        Password:</label>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-xs-10 mt-3 mt-lg-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" id="pro_password" name="fgt_pass" required
                               placeholder="Enter Password">
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 d-none d-sm-block mt-auto">
                    <label for="pro_brand" class="float-md-right float-sm-right "> Confirm <span class="d-sm-none d-md-inline"> New </span>
                        Password:</label>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7  ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" id="pro_newPass" name="cfm_pass" required
                               placeholder="Enter Password Again">
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-auto"></div>
                <div class="col-sm-7 col-md-7 col-lg-5 col-xl-5">
                    <button type="submit" name="change_password" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i>
                        Submit
                    </button>
                </div>
            </div>

            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-auto"></div>
                <div class="col-sm-7 col-md-7 col-lg-5 col-xl-5">
                    <button type="reset" name="reset" class="btn btn-primary btn-block"><i class="fas fa-undo"></i>
                        Reset
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>


<hr>
<footer>
    <font size="2"> <p> Developed by <a href="https://github.com/AnnasAsif"> Muhammad Annas Asif </a></p>
        <address>
            University of Central Punjab, Lahore
        </address>
        <p> Copyrights &copy; 2019 All rights reserved. </p> </font>
</footer>
</body>
</html>