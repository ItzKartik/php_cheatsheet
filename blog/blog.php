<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection failed". mysqli_error());
    }

    mysqli_select_db($con, 'blog');
    $blog_created = false;
    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $conn = mysqli_query($con, "INSERT INTO `blogs` (`title`, `description`, `dd`) VALUES ('$title', '$desc', current_timestamp());");
        if($conn == TRUE){
            $blog_created = true;
        }
        else{
            $blog_created = 'error';
        }
        mysqli_close($con);
    }

?>

<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Coded By Kartik</title>
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
                    <div class="blog">
                        <?php
                            $retrieve = mysqli_query($con, "SELECT * FROM blogs");
                            if (mysqli_num_rows($retrieve) > 0) {
                                $i=0;
                                while($row = mysqli_fetch_array($retrieve)) {
                                    echo '<Br>';
                                    echo "<img class='blog_img' src='img/1.png' alt=''>";
                                    echo '<div style="background-color: antiquewhite; padding: 10px;">';
                                    echo '<span class="blog_title">'.$row["title"].'</span>';
                                    echo '</div>';
                                    $i++;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="buttons_con">
                        <button class="create_new btn btn-primary">Create New Blog</button><Br>
                        <a class="my_blogs" href="">My Blogs</a>
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
            <form action="blog.php" method="POST" class="mx-auto text-center">
                <div class="form-group">
                    <input class="form-control title_field" type="text" name="title" placeholder="Enter Title...">
                </div>
                <div class="form-group">
                    <textarea name="desc" id="" cols="30" rows="19" placeholder="Enter Description..." class="desc_field form-control"></textarea>
                </div>
                <button class="create_new form-control">Create</button>
            </form>

        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
