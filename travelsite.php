<?php
    $insert = false;
    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("connection failed". mysqli_connect_error());
        }
        else{
            // echo "Successfully connected";
        }

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dd`) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

        // echo $sql;

        if($con->query($sql) == TRUE){
            $insert = true;
            // echo "Database Updated";
        }
        else{
            // echo "Database Failed : $sql <br> $con->error";
        }

        $con->close();
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Travel Site By Kartik
        </title>
        <style>
            *{
                font-family: 'Ubuntu ';
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            .container{
                max-width: 80%;
                background-color: antiquewhite;
                padding: 34px;
                text-align: center;
                margin: auto;
            }
            input, textarea{
                width: 80%;
                margin: 10px;
                border-radius: 20px;
                border: 2px solid white;
                padding: 10px;
            }
            button{
                width: 100px;
                height: auto;
                border-radius: 20px;
                padding: 10px;
                border: 2px solid white;
                background-color: white;
                color: red;
                font-weight: 900;
            }
            h1{
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <h1>Welcome To Jamshedpur</h1><Br><Br>
            <h3>Enter your Details to confirm your participation in the trip</h3>
            <?php
                if($insert == true){
                    echo "<h3 style='color: green;'>Thanks for submitting...</h3>";
                }
            ?>
            
                <Br>
            <form action="index.php" method="POST">
                <input type="text" name="name" required id="name" placeholder="Enter Your Name">
                <input type="number" name="age" required id="age" placeholder="Enter Your Age">
                <input type="text" name="gender" required id="gender" placeholder="Enter Your Gender">
                <input type="email" name="email" required id="email" placeholder="Enter Your Email">
                <input type="number" name="phone" required id="phone" placeholder="Enter Your Number">
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information..."></textarea>
                <br>
                <button type="submit">Submit</button>
                <button type="button">Reset</button>
            </form>
        </div>
        
        <script>
       
        </script>
    </body>
</html>