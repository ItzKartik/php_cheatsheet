<?php

require_once 'connect_to_db.php';

if(is_array($_FILES)){
    if (empty($_FILES)){
        echo "yes it's empty";
    }
    else{
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $music = $_FILES["fileToUpload"]["name"];
                $part = $_POST['part'];
                $bhajan = $_POST['bhajan'];
    
                $conn = mysqli_query($con, "INSERT INTO `sno` (`part`, `bhajan`, `music`) VALUES ('$part', '$bhajan', '$music');");
                if($conn == TRUE){
                    $uploaded = true;
                    echo "Done";
                }
                else{
                    $uploaded = 'error';
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        mysqli_close($con);
    }
}
else{
    echo "Error In Creation";
}

?>