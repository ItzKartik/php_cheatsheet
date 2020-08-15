<?php
    session_start();
?>
<?php
    $_SESSION["name"] = "Lord Krishna";
    $_SESSION["favanimal"] = "Cow";
    print_r($_SESSION);
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    print_r($_SESSION);
    // echo "Favorite color is " . $_SESSION["name"] . ".<br>";
    // echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>