<?php

require 'html/header.html';

?>      

<div class="col-md-12 mx-auto text-center main_page">
    <div class="row">
        <div class="col-md-9 mr-auto text-left" style="padding: 40px;">
            <div class="blog">
                <?php
                    require_once 'db.php';
                        $retrieve = mysqli_query($con, "SELECT * FROM blogs");
                        if (mysqli_num_rows($retrieve) > 0) {
                            $i=0;     
                            while($row = mysqli_fetch_array($retrieve)) {
                ?>
                <div class="wrap_blog mx-auto text-center" style="margin:10px; border-radius:20px; border: 2px solid antiquewhite; padding: 20px;">
                    <div class="row">
                        <div class="col-md-3" style="padding: 10px;">
                            <div class="blog_img_wrap">
                                <?php
                                    echo "<img class='blog_img2' src='uploads/".$row['image_name']."' alt=''>";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6 mr-auto text-left" style="padding: 10px;">
                            <?php
                                echo '<span class="blog_title">'.$row['title'].'</span>';
                            ?>
                        </div>
                        <div class="col-md-3" style="padding: 10px;">
                            <div class="icons">
                                <div class="row">
                                    <div class="col-1">
                                        <a href="<?php echo 'full_view.php?id='.$row['sno'].''; ?>"><i class="fa fa-edit"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="delete_it(this)" id="<?php echo 'b'.$row['sno'].''; ?>"><i class="fa fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="<?php echo 'full_view.php?id='.$row['sno'].''; ?>"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                            $i++;
                        }
                    }
                    else{
                        echo "No Blogs Yet";
                    }
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="buttons_con">
                <button class="create_new btn btn-primary">
                    <a style="color: white !important;" class="create_new_blog" href="create_blog.php">Create New Blog</a>
                </button><Br>
            </div>
        </div>
    </div>
</div>

<?php

    require 'html/footer.html';

?>