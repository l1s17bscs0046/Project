<?php


$email=$_SESSION['user_email'];
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Courses</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subject Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_pro = "select Sub.sub_id,Sub.Title from student S join student_courses SC on S.Std_id=SC.Std_id 
join subjects Sub on SC.Sub_id =Sub.Sub_id where S.email='$email'";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Course found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
					$pro_id = $row_pro['sub_id'];
                    $pro_Title = $row_pro['Title'];
                    
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $pro_Title; ?></td>
                        <td>
                            <a href="home.php?del_pro=<?php echo $pro_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Withdraw
                            </a>
                        </td>
                    </tr>
					
                    <?php
                }
				
            }
            ?>
			
            </tbody>
        </table>
		<div class="text-center">
		<a href="home.php?enroll" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Enroll in a  Course
                            </a>
							</div>
    </div>
</div>