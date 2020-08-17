<?php

require 'html/header.html';

?>
  <style>
      .fc{
          display: none;
      }
  </style>      
        <div class="col-md-12 mx-auto text-center main_page">
            <div class="row">
                <div class="col-md-9 mx-auto text-left" style="padding: 40px;"> 
                    <div class="blog">
                        <?php
                            require_once 'db.php';
                            $sno = $_GET['id'];
                                $retrieve = mysqli_query($con, "SELECT * FROM blogs WHERE sno='$sno'");
                                if (mysqli_num_rows($retrieve) > 0) {
                                    $i=0;     
                                    while($row = mysqli_fetch_array($retrieve)) {
                        ?>
                        <form enctype="multipart/form-data" method="POST" class="mx-auto text-left formc_update" style="margin: 40px;">
                            <div class="form-group fc" style="opacity: 0;">
                                <input class="form-control sno_field" type="text" value="<?php echo $row["sno"]; ?>" name="sno">
                            </div>
                            <div class="wrap_blog mx-auto text-left" style="margin:10px; padding: 20px;">
                                <div class="blog_img_wrap">
                                    <div class="form-group fc">
                                        <label class="custom-file-upload"><input class="file_upload form-control title_field" type="file" name="fileToUpload">
                                        Upload Image</label>
                                    </div>
                                    <?php
                                        echo "<img class='blog_img3' src='uploads/".$row['image_name']."' alt='Deleted your server'>";
                                    ?>
                                </div>
                                <div class="txtwrap">
                                    <Br>
                                    <div class="form-group fc">
                                        <input class="form-control title_field" type="text" value="<?php echo $row["title"]; ?>" name="title" placeholder="Enter Title...">
                                    </div>
                                    <?php
                                        echo '<h2 class="fc_hide" style="margin-top: 20px;">'.$row['title'].'</h2><hr>';
                                    ?>

                                    <div class="form-group fc">
                                        <textarea name="desc" id="" rows="8" class="desc_field form-control"><?php echo $row["description"]; ?></textarea>
                                    </div>
                                    <?php
                                        echo '<p class="fc_hide" style="margin: 20px; font-size: 1.2rem;">'.$row['description'].'</p>';
                                    ?>
                                </div>
                                <button type="submit" class="fc col-md-2 btn btn-primary form-control">Submit</button>
                            </div>
                        </form>
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
                            <a class="edit_blog create_new_blog"><i class="fas fa-edit"></i> Edit</a>
                            <a class="cancel_edit edit_blog create_new_blog" style="display: none;"><i class="fas fa-times"></i> Cancel</a>
                        </button><Br>
                        <a class="my_blogs" href="myblogs.php">My Blogs</a>
                    </div>
                </div>
            </div>
        </div>
<?php

    require 'html/footer.html';

?>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blog_img3').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
    }
    $(".file_upload").change(function(){
        readURL(this);
    });

    $('.create_new').click(function(){
        if($('.edit_blog').css('display') !== 'none'){
            $('.edit_blog').hide();
            $('.fc_hide').hide();

            $('.fc').fadeIn();
            $('.cancel_edit').fadeIn();
        }
        else{
            $('.edit_blog').fadeIn();
            $('.fc_hide').fadeIn();

            $('.fc').hide();
            $('.cancel_edit').hide();
        }
    });
</script>