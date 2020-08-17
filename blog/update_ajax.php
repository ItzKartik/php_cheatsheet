<?php

require_once 'db.php';

if(is_array($_FILES)){
    $target_dir = "/opt/lampp/htdocs/php/blog/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    // Check for image
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $image_name = $_FILES["fileToUpload"]["name"];
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $sno = $_POST['sno'];

            $conn = mysqli_query($con, "UPDATE `blogs` SET `title` = '$title', `description` = '$desc', `image_name` = '$image_name', `user` = 'prince' WHERE `blogs`.`sno` = $sno;");
            if($conn == TRUE){
                $blog_created = true;
                echo "Updated";
            }
            else{
                $blog_created = 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    mysqli_close($con);
}
else{
    echo "Error In Creation";
}

?>