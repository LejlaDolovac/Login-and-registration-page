<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["email"]) && isset($_POST["password"])) {

            $user = 'data.json';

            $getUser = file_get_contents($user);
            $login = json_decode($getUser); 

            $email = $_POST["email"];
            $password = $_POST["password"];    

            $saltStart = "123testw";
            $saltEnd = "321wtest";
          
            // create acount and save hash
            $hashedPassword = password_hash($saltStart . $password . $saltEnd, PASSWORD_BCRYPT);
    
            $jsonArray = array('email' => $email , 'password' => $hashedPassword);
    
            // convert updated array to JSON
            $jsondata = json_encode($jsonArray, JSON_PRETTY_PRINT);
    
            // setting write or read-action
            $fp = fopen('./data.json' , 'w');
            fwrite($fp, json_encode($jsonArray, true));
            fclose($fp);

            echo "Registreringen gick bra";
        } else {
            echo "Email och Password är inte satt!";
        }
    } else {
        echo "FEL REQUEST METHOD";
    }

?>



    </body>
</html>



<style>

 h1{
     color: green;
     text-align: center;
     margin-top: 20rem;
     font-size: 10rem;
 }

</style>
