<?php

    require 'html/header.html';

?>

<div class="col-md-12 mx-auto text-center create_new_form" style="padding-top: 20px;">
    <?php

        require_once 'db.php';

        if($blog_created){
            if($blog_created == 'error'){
                echo "<h1 style='color: red;'>Failed To Create...</h1>";
            }
            else{
                echo "<h1 style='color: green;'>Successfully Created...</h1>";
                echo "<a class='my_blogs' href='my_blogs.html'>Click Here For Your Blogs</a>";
            }
        }
    ?>
    <h1 style="margin:40px;">Create New Blog</h1>
    <form enctype="multipart/form-data" method="POST" class="col-md-8 mx-auto text-left formc" style="margin: 40px;">
        <div class="form-group">
            <label class="custom-file-upload"><input class="form-control title_field" type="file" name="fileToUpload">
            Upload Image</label>
        </div>
        <div class="form-group">
            <input class="form-control title_field" type="text" name="title" placeholder="Enter Title...">
        </div>
        <div class="form-group">
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Enter Description..." class="desc_field form-control"></textarea>
        </div>
        <button class="col-md-3 btn btn-primary form-control">Create</button>
    </form>
</div>

<?php

    require 'html/footer.html';

?>