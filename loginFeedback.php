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
        
            $saltStart = "123testw";
            $saltEnd = "321wtest";

            $loginEmail = $_POST["email"];
            $loginPassword = $_POST["password"];


            echo password_verify($saltStart . $loginPassword . $saltEnd, $login->password);
                

            if(password_verify($saltStart . $loginPassword . $saltEnd, $login->password) && $loginEmail == $login->email) {
                echo "You are now online!";
            } else {
                echo "Dosent work homie";
            }

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
