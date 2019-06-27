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
            $get_pro = "select Sub.Title from student S join student_courses SC on S.Std_id=SC.Std_id 
join subjects Sub on SC.Sub_id =Sub.Sub_id";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Course found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
					
                    $pro_Title = $row_pro['Title'];
                    
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $pro_Title; ?></td>
                        <td>
                            <a href="home.php?del_pro=<?php echo $pro_Title?>" class="btn btn-danger">
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
    </div>
</div>