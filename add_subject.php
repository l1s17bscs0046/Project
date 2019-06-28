<?php


if(isset($_POST['add_sub'])){
    $course = $_POST['sub_name'];


    $enroll_course = "insert into subjects (title) value ('$course')";
    $update_pro = mysqli_query($con, $enroll_course);
    if($update_pro){
        header("location: Admin_panel.php?view_subject");
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
                <div class="col-lg-8 col-xl-8 col-md-8 col-sm-7 ">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pro_title" name="sub_name" required
                               placeholder="Enter Subject Title"

                        >
                    </div>
                </div>

            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_sub" name="add_sub"
                           value="Add Subject Now">
                </div>
            </div>
        </form>
    </div>
</div>