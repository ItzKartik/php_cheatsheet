<?php

require 'html/header.html';

?>

<div class="col-md-12 mx-auto text-center main_page">
    <div class="row">
        <div class="col-md-9 mr-auto text-left" style="padding: 40px;">
            <div class="blog row">
                <?php
                    require_once 'db.php';
                    $retrieve = mysqli_query($con, "SELECT * FROM blogs");
                    if (mysqli_num_rows($retrieve) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($retrieve)) {
                ?>
                <div class="wrap_blog col-md-5" style="margin-top:20px; padding: 10px; border-radius: 10px; background: antiquewhite;">
                    <div class="img_wrap">
                        <?php
                            echo "<a href='full_view.php?id=".$row['sno']."'>";
                            echo "<img class='blog_img' src='uploads/".$row['image_name']."' alt=''>";
                        ?>
                    </div>
                    <div style="background-color: antiquewhite; padding: 10px;">
                        <?php
                            echo '<h2 style="margin:10px;" class="blog_title">'.$row["title"].'</h2><hr>';
                        ?>
                    </div>
                    </a>
                </div>
                <?php
                            $i++;
                        }
                    }
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="buttons_con">
                <button class="create_new btn btn-primary">
                    <a class="create_new_blog" href="create_blog.php">Create New Blog</a>
                </button><Br>
                <a class="my_blogs" href="myblogs.php">My Blogs</a>
            </div>
        </div>
    </div>
</div>

<?php

    require 'html/footer.html';

?>