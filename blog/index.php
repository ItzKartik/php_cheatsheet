<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Powered By ItzKartik</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
            a{
                text-decoration: none;
                color: black !important;
            }
            .buttons_con{
                position: fixed; 
                top: 80px; 
                right: 80px;
            }
            .blog{
                cursor: pointer;
            }
            @media(max-width: 769px){
                .blog_img{
                    height: 200px !important;
                }
                .blog_title{
                    font-size: 1rem !important;
                }
                .overlay{
                    position: absolute;
                    top: 65% !important;
                }
                .buttons_con{
                    border-radius: 20px;
                    background: white !important;
                    position: fixed !important; 
                    top: 20px !important;  
                    right: 80px;
                }
                .main_page{
                    margin-top: 100px !important;
                }
            }
        </style>
    </head>
    <body>
        
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

        <div class="col-md-12 mx-auto text-center create_new_form" style="display: none; padding-top: 20px;">
            <?php
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
            <form enctype="multipart/form-data" method="POST" class="mx-auto text-center formc" style="margin: 40px;">
                <div class="form-group">
                    <input class="form-control title_field" type="text" name="title" placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <input class="form-control title_field" type="file" name="fileToUpload" placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <textarea name="desc" id="" cols="30" rows="19" placeholder="Enter Description..." class="desc_field form-control"></textarea>
                </div>
                <button class="btn btn-primary form-control">Create</button>
            </form>
        </div>

    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
    $('.formc').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: "ajax.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function (data) {
                alert("Blog Created Successfully");
                window.location.replace('myblogs.php');
            },
            error: function (error) {
                console.log(error);
                alert(error);
            }
        });
    });
    </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
