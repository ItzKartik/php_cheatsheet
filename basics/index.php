<?php
    
// echo (round(0.50));
// echo rand(10, 100);

/*
$txt1 = "Hello";
$txt2 = "World";
$txt1 .= $txt2;
echo $txt1;
*/

/*
$a = array("a" => "red", "b" => "hello");
$b = array("a" => "red", "b" => "hello");
print_r($a+$b); // Union
print_r($a!==$b); // Union
*/

// $user = "";
// echo $status = (empty($user)) ? "anonymous" : "logged in";

/*
$color = "Red";
switch($color){
    case "Red":
        echo "red";
    case "blue":
        echo "blue";
    case "violet":
        echo "violet";
    default:
        echo "default";
}

$x = 0;
while($x <= 5){
    echo "Hello".$x;
    $x++;
}

$x = 0;
do{
    if($x == 1){
        echo "hello".$x;   
    }
    $x++;
}while($x <= 5);

for($x = 0; $x <= 100; $x+=10){
    echo $x;
}

$colors = array("red", "green", "blue", "yellow");
foreach($colors as $value){
    echo "$value";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
*/

// function addNumbers(float $a, float $b){
//     return $a + $b;
// }
// echo addNumbers(1.2, 5.2);

// $GLOBALS['x'] = 20;
// echo $x;


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php /* echo $_SERVER['PHP_SELF']; */ ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <a href="test_get.php?subject=Prince&web=W3schools.com">Test $GET</a>
</body>
</html> -->

<?php

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
*/

// $str = "Visit W3Schools";
// $pattern = "/w3schools/i";
// echo preg_match($pattern, $str);

// echo "<Br>";

// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";
// echo preg_match_all($pattern, $str); // Outputs 4

// echo "<Br>";

// $str = "Visit Microsoft!";
// $pattern = "/microsoft/i";
// echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

?>