<?php

require 'html/header.html';

?>

<?php
    require_once 'db_scripts/connect_to_db.php';
    $retrieve = mysqli_query($con, "SELECT * FROM sno");
    if (mysqli_num_rows($retrieve) > 0) {
        $i=0;
        while($row = mysqli_fetch_array($retrieve)) {

            echo '<a href="'.$row['part'].'">Part '.$row['part'].'</a>';
            // echo nl2br(stripslashes($row['bhajan']));
            echo '<br>';
            $i++;
        }
    }
?>

<?php

    require 'html/footer.html';

?>