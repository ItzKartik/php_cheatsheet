<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name = "Prince";
    $value = "Gupta";
    setcookie($name, $value, time()+(86400 * 30), "/");

    if(!isset($_COOKIE[$name])) {
        echo "Cookie named '" . $name . "' is not set!";
    } else {
        echo "Cookie '" . $name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$name];
    }
    ?>
</body>
</html>