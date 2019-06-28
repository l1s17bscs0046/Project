<?php
if(isset($_GET['del_sub'])){
    $del_id = $_GET['del_sub'];

    $del_std = "delete from student where Sub_id = (select Sub_id from subjects where Sub_id='$del_id')";
    $run_deletestd = mysqli_query($con,$del_std);

    $del_topics = "delete from subject_content where title = (select * from subjects where Sub_id='$del_id')";
    $run_delete = mysqli_query($con,$del_topics);

    $del_sub = "delete from subjects where Sub_id='$del_id'";
    $run_del = mysqli_query($con,$del_sub);
    if($run_del){
        header('location: Admin_Panel.php?view_subject');
    }
}