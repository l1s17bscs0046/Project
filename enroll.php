<?php
if(!isset($_SESSION['user_email'])){
    header('location: home.php');
}

if(isset($_POST['add_course'])){
    //getting text data from the fields
    $course = $_POST['add_course'];
    //getting image from the field
    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");
    $update_product = "update products set pro_cat = '$pro_cat', 
                                        pro_brand = '$pro_brand',
                                        pro_title = '$pro_title' ,
                                        pro_price = '$pro_price',
                                        pro_desc = '$pro_desc',
                                        pro_image = '$pro_image', 
                                        pro_keywords = '$pro_keywords' 
                                        where pro_id='$pro_id'";
    $update_pro = mysqli_query($con, $update_product);
    if($update_pro){
        header("location: index.php?view_products");
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


            <div class="col-lg-3 col-xl-3 col-md-8 col-sm-7 ">

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