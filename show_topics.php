<div class="row">
    <div class="col-sm-12">
        <h1>Subjects</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Topic</th>
                <th scope="col">Content</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $topic= $_GET['show_topics'];
            $get_sub = "select S.title, SC.topic, SC.content from subjects S join subject_content SC on S.title=SC.title where SC.title = '$topic'";
            $run_sub = mysqli_query($con,$get_sub);
            $count_sub = mysqli_num_rows($run_sub);
            if($count_sub==0){
                echo "<h2> No topics found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_sub= mysqli_fetch_array($run_sub)) {
                    $subject_title = $row_sub['title'];
                    $subject_topic = $row_sub['topic'];
                    $subject_content = $row_sub['content'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>

                        <td><?php echo $subject_topic; ?></td>

                        <td><?php echo $subject_content; ?></td>
                        <td width="200">
                            </a>

                            <a href="Admin_Panel.php?del_topic=<?php echo $subject_topic?>" class="btn btn-danger">
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
            <a href="Admin_Panel.php?add_newTopics" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New Topic
            </a>
        </div>
    </div>
</div>