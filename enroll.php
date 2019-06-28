<?php
if(!isset($_SESSION['user_email'])){
    header('location: index.php');
}

if(isset($_SESSION['adm_email'])){
    header('location: Admin_Panel.php');
}

$email=$_SESSION['user_email'];
echo "$email";

if(isset($_POST['add_sub'])){
    $course = $_POST['sub_name'];


    $enroll_course = "insert into student_courses (Std_id, Sub_id) value ((select std_id from student where email='$email'),(select std_id from
subjects where title = '$course'))";;
    $update_pro = mysqli_query($con, $enroll_course);
    if($update_pro){
        header("location: home.php?view_courses");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Select a Course </h2>
            </div>


            <div class="form-group row">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-book"></i></div>
                    </div>
                    <select  class="form-control" id="pro_price" required placeholder="choose "name="education">
                        <option>Select Course</option>
                        <?php
                        $getSubQuery = "select Sub.sub_id,Sub.Title from student S join student_courses SC on S.Std_id=SC.Std_id right
join subjects Sub on SC.Sub_id =Sub.Sub_id where S.Std_id is NULL";
                        $getSubResult = mysqli_query($con, $getSubQuery );
                        while ($row = mysqli_fetch_assoc($getSubResult)) {
                            $sub_id = $row['Sub_id'];
                            $sub_title = $row['Title'];
                            //if ($response["type"] == "warning" && $edu_id== $education) {
                            //  echo "<option value='$edu_id' selected>$edu_title</option>";
                            //} else {
                            echo "<option value='$sub_id'>$sub_title</option>";
                            //}
                        }
                        ?>
                    </select><br>

                </div>
            </div>




            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_pro" name="add_course"
                           value="Select Course Now">
                </div>
            </div>
        </form>
    </div>
</div>

