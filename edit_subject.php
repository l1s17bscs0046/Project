<?php
if(isset($_GET['edit_sub'])){
    $get_id = $_GET['edit_sub'];
    $get_pro = "select * from subjects where Sub_id='$get_id'";
    $run_pro = mysqli_query($con, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $sub_id = $row_pro['Sub_id'];
    $sub_title = $row_pro['Title'];



}
if(isset($_POST['update_subject'])){
    //getting text data from the fields
    $sub_title = $_POST['Title'];


    $update_subject = "update subjects set Title= '$sub_title'
                   where Sub_id='$sub_id'";

    $update_sub= mysqli_query($con, $update_subject);
    if($update_sub){
        header("location: Admin_Panel.php?view_subject");

    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Subject</h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="sub_title">Subject Title</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="sub_title" name="sub_title" placeholder="Title"
                           value="<?php echo $sub_title;?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_sub" name="update_sub"
                           value="Update Subject Now">
                </div>
            </div>
        </form>
    </div>
</div>
