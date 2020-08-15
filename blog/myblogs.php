<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Blogs</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
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

        

    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
    function delete_it(ele){
        var e = $(ele).attr('id');
        var v = e.split('b');
        var url = "delete_ajax.php?id="+v[1];
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
                alert("Blog Deleted Successfully");
                // window.location.replace('myblogs.php');
            },
            error: function (error) {
                console.log(error);
                alert('Error in Deletion');
            }
        });
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>