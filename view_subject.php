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
            $get_sub = "select * from subjects";
            $run_sub = mysqli_query($con,$get_sub);
            $count_sub = mysqli_num_rows($run_sub);
            if($count_sub==0){
                echo "<h2> No subjects found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_sub= mysqli_fetch_array($run_sub)) {
                    $subject_id = $row_sub['Sub_id'];
                    $subject_title = $row_sub['Title'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>

                        <td><?php echo $subject_title; ?></td>
                        <td>
                            <a href="Admin_Panel.php?show_topics=<?php echo $subject_title?>" class="btn btn-primary">
                                <i class="fa fa-book"></i> Topics
                            </a>
                        </td>
                        <td>
                            <a href="Admin_Panel.php?edit_sub=<?php echo $subject_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="Admin_Panel.php?del_sub=<?php echo $subject_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
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
            <a href="Admin_Panel.php?add_subject" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add a Subject
            </a>
        </div>
    </div>
</div>