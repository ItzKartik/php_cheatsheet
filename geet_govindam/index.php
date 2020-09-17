<?php

require 'html/header.html';

?>
   
    <div class="container cn mx-auto text-center">
            <br>
            <span class="foot" style="font-family: 'Lobster'; font-size: 10vw; color: #1d37ff;">G<span style="font-size: 5vw;">eet</span></span>
            &nbsp;&nbsp;<span class="foot" style="font-family: 'Lobster'; font-size: 10vw; color: #1d37ff;">G<span style="font-size: 5vw;">ovindam</span></span>
            <br>
            <span style="color: #1d37ff; font-weight: 700;">Written By 
            <span style="text-decoration-line: underline;">Shri JayDev Goswami</span>
            ( Devotee Of <span style="text-decoration-line: underline; font-size:1.3rem; color: rgb(255, 102, 47); cursor: pointer;">Lord Krishna</span> ) 
            And Beautifully Presented By 
            <span style="text-decoration-line: underline;">Shri Rajendradasji Maharaj</span> ( Youtube Playlist </span>
            <a href="https://www.youtube.com/watch?v=C6JR7TfXPoQ&list=PLhKX4OoBv7kRfT_YEf40SzQRTPqk6wGTl">Click Here )</a><Br><Br>
            <?php
                require_once 'connect_to_db.php';
                $retrieve = mysqli_query($con, "SELECT * FROM sno");
                if (mysqli_num_rows($retrieve) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($retrieve)) {
                        echo '<div class="links"><a target="_blank" href="view.php?part='.$row['part'].'">Part '.$row['part'].'</a></div>';
                        $i++;
                    }
                }
            ?>
            <div class="links"><a target="_blank" href="view.php?part=16">Govind Hare</a></div>
    </div>
    <br><Br>

<?php

    require 'html/footer.html';

?>