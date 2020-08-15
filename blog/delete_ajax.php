<?php

require_once 'db.php';

if(is_array($_GET)){
    $sno = $_GET['id'];
    if ($sno) {
        $conn = mysqli_query($con, "DELETE FROM `blogs` WHERE `blogs`.`sno` = $sno");
        if($conn == TRUE){
            echo "Deleted";
        }
        else{
            echo "Error in deletion";
        }
    } else {
        echo "Sorry, there was an error deleting your blog.";
    }
    mysqli_close($con);
}
else{
    echo "Error In Deletion";
}

?>