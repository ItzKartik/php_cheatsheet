<?php

require 'html/header.html';

?>     
    <div class="col-md-12 mx-auto text-center main_page">
        <div class="col-md-9 mx-auto text-left" style="padding: 40px;">
            <?php
                require_once 'db_scripts/connect_to_db.php';
                $sno = $_GET['part'];
                $retrieve = mysqli_query($con, "SELECT * FROM sno WHERE part='$sno'");
                if (mysqli_num_rows($retrieve) > 0) {
                    $i=0;     
                    while($row = mysqli_fetch_array($retrieve)) {
                        echo '<h1>Part '.$row['part'].'</h1>';
                        echo $row['music'];
                        echo '<br><Br>';
                        echo '<div class="mx-auto text-left">'.nl2br(stripslashes($row['bhajan'])).'</div>';
            ?>

            <?php
                        $i++;
                    }
                }
                else{
                    echo "No Data";
                }
            ?>
        </div>
    </div>
<?php

    require 'html/footer.html';

?>