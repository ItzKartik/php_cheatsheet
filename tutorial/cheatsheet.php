<!-- sudo /opt/lampp/lampp start -->
<!-- sudo chown -R root:prince7 <Folder Name> -->
<!-- http://localhost/php/index.php -->
<html>
    <head>
        <title>
            PHP Cheat Sheet
        </title>
    </head>
    <body>
    <?php

    // Iterate Over arrays
    $array = array("Maa Durga", "Vishnu Ji", "Krishna Ji");
    // $a = 0;
    // while ($a < count($array)) {
    //     echo "<br>";
    //     echo $array[$a];
    //     $a++;
    // }

    // Do while loop
    // $b = 0;
    // do{
    //     if($array[$b] == "Maa Durga"){
    //         echo "<Br>";
    //         echo "Jai Mata Di";
    //     }
    //     else{
    //         echo "<Br>";
    //         echo $array[$b];
    //     }
    //     $b++;
    // }
    // while($b < count($array));
    
    // $c = 200;
    // for($a=0; $a < 10; $a++){
    //     echo "<Br>";
    //     echo $a;
    // }

    // foreach($array as $a){
    //     echo "<Br>";
    //     echo $a;
    // }

    // function hello(){
    //     echo "hello";
    // }
    // hello();

    $str = "This";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn ." <br>";
    echo "Number of words ". str_word_count($str) ." <br>";
    echo "Reversed String ". strrev($str) ." <br>";
    echo "Search for is in this string is ". strpos($str, "is") ." <br>";
    echo "Replaced String ". str_replace("is", "at", $str) ." <br>";
    
    ?>
    </body>
</html>
