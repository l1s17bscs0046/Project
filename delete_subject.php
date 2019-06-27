<?php
if(isset($_GET['del_sub'])){
    $del_id = $_GET['del_sub'];
    $del_sub = "delete from subjects where Sub_id='$del_id'";
    $run_del = mysqli_query($con,$del_sub);
    if($run_del){
        header('location: Admin_Panel.php?view_subjects');
    }
}