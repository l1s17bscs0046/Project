<?php
if(!isset($_SESSION['user_email'])){
    header('location: index.php');
}


if(isset($_GET['del_pro'])){
    $del_id = $_GET['del_pro'];
    $del_pro = "delete from student_courses where Sub_id = '$del_id'";
    $run_del = mysqli_query($con,$del_pro);
    if($run_del){
        header('location:home.php?view_courses');
    }
}