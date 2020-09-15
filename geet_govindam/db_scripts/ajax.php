<?php

require_once 'connect_to_db.php';

if(is_array($_POST)){
    $music = $_POST['link'];
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
    mysqli_close($con);
}
else{
    echo "Error In Creation";
}

?>