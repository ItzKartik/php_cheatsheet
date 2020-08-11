<?php

require_once "router.php";

route('/', function() {
    return "Hello World";
});

route('/about', function() {
    return "Thanks for reading about me";
});

$action = $_SERVER['REQUEST_URI'];

dispatch($action);

?>