<?php
if(!isset($_SESSION['adm_email'])){
    header('location: Admin.php');
}


if(isset($_GET['del_std'])){
    $del_id = $_GET['del_std'];

    $del_stCourse="delete from student_courses where Std_id = '$del_id'";
    $run=mysqli_query($con, $del_stCourse);

    $del_pro = "delete from student where Std_id='$del_id'";
    $run_del = mysqli_query($con,$del_pro);
    if($run_del){
        header('location:Admin_Panel.php?view_students');
    }
}