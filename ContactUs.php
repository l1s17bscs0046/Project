<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

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
        <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12"><h3>Leave Your Query:</h3></div>
                </div>
                <div class="row my-3">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> Enter </span>
                            Name:</label>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="pro-name" name="pro-name" required
                                   placeholder="Enter Your Name" >
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> Enter </span>
                            Email:</label>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="email" class="form-control" id="pro_email" name="pro_email" required
                                   placeholder="Enter Your Email" >
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-2 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> Select </span>
                            Subject:</label>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-book"></i></div>
                            </div>
                            <select class="form-control" id="pro_cat" name="pro_cat" required>
                                <option>Select Your Subject</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Question">Question</option>
                                <option value="Request">Request</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 d-none d-sm-inline mt-auto">
                        <label for="pro_title" class="float-md-right float-sm-right"> <span class="d-sm-none d-md-inline"> Enter </span>
                            Message:</label>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-book"></i></div>
                            </div>
                            <textarea class="form-control" type="file" id="pro_desc" name="pro_desc" required
                                      placeholder="Enter Your Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="d-none d-sm-block col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-auto"></div>
                    <div class=" col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <button type="submit" name="insert_pro" formaction="ContactUs.html" class="btn btn-primary btn-block"><i class="fas fa-check-circle"></i>
                            Submit
                        </button>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="d-none d-sm-block col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-auto"></div>

                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <button type="reset" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-undo"></i>
                            Reset
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="row">
                <h3><span class="d-none d-md-inline">Location:</span></h3>
            </div>
            <div class="gmap_canvas">
                <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20central%20punjab&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="20" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                Werbung: <a href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a>
            </div>

        </div>
    </div>

    <div class="row my-3">
        <div class="col-xl-6 col-lg-6 col-md-6">


            <div class="row">
                <h3><span class="d-none d-md-inline">You can</span> Mail Us at:</h3>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 temp"><i class="fas fa-user-tie"></i> A.A3137@ucp.edu.pk</div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 temp"><i class="fas fa-user-tie"></i> HamdaCheema577@gmail.com</div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 temp"><i class="fas fa-user-tie"></i> Muhammad.Annas@ucp.edu.pk</div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="row ">
                <h3><span class="d-none d-md-inline">Or</span> Contact Us at:</h3>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 temp"><i class="fas fa-mobile-alt"></i> 0300-8449101</div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 temp"><i class="fas fa-mobile-alt"></i> 0321-4506787</div>
                <div class="col-lg-3"></div>
            </div>
        </div>
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