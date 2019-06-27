<?php
$con = mysqli_connect("localhost","root","","online_study");
if(!$con)
    die("Connection failed");
?>

<?php
$e = $_GET['email'];
$sel_email = "select * from student where email = '$e'";
$sel_result = mysqli_query($con,$sel_email);
if(mysqli_num_rows($sel_result) > 0){
    echo "<i> Already Exist </i>";
}
?>