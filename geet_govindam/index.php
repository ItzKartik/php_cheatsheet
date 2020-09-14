<?php

require 'html/header.html';

?>
   
    <div class="container mx-auto text-center">
            <br>
            <span class="foot" style="font-family: 'Lobster'; font-size: 10vw; color: #1d37ff;">G<span style="font-size: 5vw;">eet</span></span>
            &nbsp;&nbsp;<span class="foot" style="font-family: 'Lobster'; font-size: 10vw; color: #1d37ff;">G<span style="font-size: 5vw;">ovindam</span></span>
            <Br><Br>
            <?php
                require_once 'db_scripts/connect_to_db.php';
                $retrieve = mysqli_query($con, "SELECT * FROM sno");
                if (mysqli_num_rows($retrieve) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($retrieve)) {
                        if($row['part'] < 24){
                            echo '<div class="links"><a target="_blank" href="view.php?part='.$row['part'].'">Part '.$row['part'].'</a></div>';
                        }
                        else{
                            echo '<div class="links"><a target="_blank" href="view.php?part='.$row['part'].'">Part '.$row['part'].'</a></div>';
                        }
                        $i++;
                    }
                }
            ?>
    </div>
    <br><Br>

<?php

    require 'html/footer.html';

?>