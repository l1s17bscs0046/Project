<?php
$con = mysqli_connect("localhost","root","","online_study");
if(!$con)
    die("Connection failed");
?>

<?php
if (isset($_POST['reg_std'])) {
    //getting text data from the fields
    $f_name = ($_POST['f_name']);
    $l_name = ($_POST['l_name']);
    $gender = ($_POST['gender']);
    $b_date = ($_POST['b_date']);
    $education = ($_POST['education']);
    $email= ($_POST['email']);
    $password= ($_POST['password']);
    $Confirm_password= ($_POST['Confirm_password']);

    if (!preg_match("/[a-zA-Z]+/", $f_name) || strlen($f_name) < 3) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid First Name."
        );
    } else if (!preg_match("/[a-zA-Z]+/", $l_name) || strlen($l_name) < 3) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Last Name."
        );
    } else if ($education == "Select Education") {
        $response = array(
            "type" => "warning",
            "message" => "Select Education Level."
        );
    } else if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password) && strlen($password) < 8) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Password."
        );
    } else if ($password !=$Confirm_password) {
        $response = array(
            "type" => "warning",
            "message" => "Password Doesn't Match."
        );
    }else {
        $insert_product = "insert into student (Fname, Lname,gender,DoB,Education,email,password) 
                  VALUES ('$f_name','$l_name','$gender','$b_date','$education','$email','$password');";
        $insert_pro = mysqli_query($con, $insert_product);
        if ($insert_pro) {
            //header("location: ".$_SERVER['PHP_SELF']);
            $response = array(
                "type" => "success",
                "message" => "Registered successfully."
            );
        }
    }



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="CSS/BootStrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <style>
        * {
            font-family: 'Vollkorn', serif;
        }
    </style>
	<script>
        function checkEmail(email) {
            var async  = new XMLHttpRequest();
            async.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200){
                    document.getElementById("hint").innerHTML = this.responseText;
                }
            }
            async.open("GET","check_email.php?email=" + email);
            async.send();
        }
    </script>

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
<div class="container-fluid">
    <h1 class="text-center my-4"><i class="fas fa-registered"></i> Register <span class="d-sm-inline d-none d-xs-block "> Here  </span>
    </h1>
    <?php if (!empty($response)) { ?>
        <div class="alert alert-<?php echo $response["type"]; ?>">
            <?php echo $response["message"]; ?>
        </div>
    <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-2  col-xl-2 col-md-3 col-sm-4 d-sm-inline d-none d-xs-block  mt-auto">
                <label for="pro_title" class=" float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> First Name </span>
                    <span class="d-md-none d-sm-inline"> F_Name </span></label>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-8 col-sm-7 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="f_name" required
                           placeholder="Enter first-name"
                        <?php
                        if (@$response["type"] == "warning") {
                            echo "value='$f_name'";
                        }
                        ?>
                    >
                </div>
            </div>
            <div class=" col-lg-2  col-xl-2 col-md-3 col-sm-4 d-sm-inline d-none d-xs-block mt-auto">
                <label for="pro_cat" class=" float-sm-right float-md-right"><span class="d-sm-none d-md-inline">Last Name </span>
                    <span class="d-md-none d-sm-inline">L_name</span></label>
            </div>
            <div class=" col-lg-3 col-xl-3 col-md-8 mt-3 col-sm-7 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_lname" name="l_name" required
                           placeholder="Enter last-name"
                        <?php
                        if (@$response["type"] == "warning") {
                            echo "value='$l_name'";
                        }
                        ?>
                    >
                    </select>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class=" col-lg-2 col-xl-2 col-md-3 col-sm-4  d-none  d-xs-block d-sm-block mt-auto">
                <label for="pro_brand" class=" float-sm-right float-md-right"> <span class="d-sm-none d-md-inline">  </span> Gender</label>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-8 col-sm-7 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input   type="radio"   name="gender" checked value="Female"  class="form-control"  >Female<br>
                    <input  type="radio"  name="gender" value="Male"  class="form-control"   >Male<br>
                    <input  type="radio"  name="gender"  value="Other"  class="form-control"  >Other<br>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2  col-md-3  col-sm-4 d-none  d-none d-xs-block  d-none d-sm-block mt-auto">
                <label for="pro_img" class=" float-sm-right float-md-right"><span class="d-sm-none d-md-inline"> Date of birth </span>
                    <span class="d-md-none d-sm-inline"> D.O.B </span> </label>
            </div>
            <div class=" col-lg-3 col-xl-3 col-md-8  col-sm-7 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <input type="date"  class="form-control" id= "pro_date" name="b_date">

                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class=" col-lg-2 col-xl-2 col-md-3 col-sm-4  d-none  d-xs-block d-sm-block mt-auto">
                <label for="pro_brand" class=" float-sm-right float-md-right"> <span class="d-sm-none d-md-inline"> </span>  Educational level</label>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-8 col-sm-7 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-book"></i></div>
                    </div>
                    <select  class="form-control" id="pro_price" required placeholder="choose "name="education">
                        <option>Select Education</option>
                        <?php
                        $getEduQuery = "select * from education order by E_id";
                        $getEduResult = mysqli_query($con, $getEduQuery );
                        while ($row = mysqli_fetch_assoc($getEduResult)) {
                            $edu_id = $row['E_id'];
                            $edu_title = $row['title'];
                            if ($response["type"] == "warning" && $edu_id== $education) {
                                echo "<option value='$edu_id' selected>$edu_title</option>";
                            } else {
                                echo "<option value='$edu_id'>$edu_title</option>";
                            }
                        }
                        ?>
                    </select><br>

                </div>
            </div>

            <div class= "col-lg-2 col-xl-2 col-md-3 col-sm-4  d-none d-xs-block d-none d-sm-block mt-auto">
                <label for="pro_price" class="float-md-right float-sm-right">  Email
                </label>
            </div>
            <div class=" col-lg-3 col-xl-3 col-md-8 col-sm-7 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-envelope-square"></i> </div>
                    </div>
                    <input  type="email" class="form-control" id="pro_email" name="email" onkeyup="checkEmail(this.value)" required placeholder="Enter Email">
					<span class="text-danger" id="hint" ></span>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class=" col-lg-2 col-xl-2  col-md-3 col-sm-4  d-none d-sm-block d-none d-xs-block mt-auto">
                <label for="pro_kw" class=" float-sm-right float-md-right">
                    Password: </label>
            </div>
            <div class="col-lg-3 col-xl-3  col-md-8 col-sm-7 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control"  type="password" id="pro_password" name="password"
                           required  placeholder="Enter password">
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class=" col-lg-2 col-xl-2 col-md-3 col-sm-4   d-none d-sm-block  d-none d-xs-block mt-auto">
                <label for="pro_desc" class=" float-sm-right float-md-right"> Confirm
                    Password:</label>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-8 col-sm-7 ">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="password" id="pro_password" name="Confirm_password"
                           required  placeholder=" Enter password again ">
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-3  d-none d-sm-block col-sm-4   d-none d-xs-block col-lg-2 col-xl-2 mt-auto"></div>
            <div class=" col-sm-7 col-md-8 col-lg-3 col-xl-3 col-sm-7 " >
                <button type="submit" name="reg_std" class="btn btn-primary btn-block"><i class="fas fa-registered"></i>
                    Regsiter
                    Now
                </button>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-3  d-none d-sm-block col-sm-4   d-none d-xs-block col-lg-2 col-xl-2 mt-auto"></div>
            <div class=" col-sm-7 col-md-8 col-lg-3 col-xl-3 col-sm-7 " >
                <button type="reset" value="reset" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-redo"></i>
                    Reset
                </button>
            </div>
        </div>
    </form>
    <br>
</div>
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