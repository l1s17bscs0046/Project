<div class="row">
    <div class="col-sm-12">
        <h1>Subjects</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_std = "select * from student";
            $run_std= mysqli_query($con,$get_std);
            $count_std = mysqli_num_rows($run_std);
            if($count_std==0){
                echo "<h2> No students found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_std= mysqli_fetch_array($run_std)) {
                    $student_id = $row_std['Std_id'];
                    $student_name = $row_std['Fname'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>

                        <td><?php echo $student_name;?></td>
                        <td>
                            <a href="Admin_Panel.php?del_std=<?php echo $student_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Remove
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