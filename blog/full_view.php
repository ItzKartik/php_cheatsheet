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
            .blog_img{
                border-radius: 5px;
                max-width: 100%; 
                width: 100%; 
                height: 500px; 
                display: block;
            }
        </style>
    </head>
    <body>
        
        <div class="col-md-12 mx-auto text-center main_page">
            <div class="container mx-auto text-left" style="padding: 40px;">
                <div class="blog">
                    <?php
                        require_once 'db.php';
                        $sno = $_GET['id'];
                            $retrieve = mysqli_query($con, "SELECT * FROM blogs WHERE sno='$sno'");
                            if (mysqli_num_rows($retrieve) > 0) {
                                $i=0;     
                                while($row = mysqli_fetch_array($retrieve)) {
                    ?>
                    <div class="wrap_blog mx-auto text-left" style="margin:10px; padding: 20px;">
                        <div class="blog_img_wrap">
                            <?php
                                echo "<img class='blog_img' src='uploads/".$row['image_name']."' alt=''>";
                            ?>
                        </div>
                        <div class="txtwrap">
                            <?php
                                echo '<h2 style="margin-top: 20px;">'.$row['title'].'</h2><hr>';
                                echo '<p style="margin: 20px; font-size: 1.2rem;">'.$row['description'].'</p>';
                            ?>
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
        </div>
    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
