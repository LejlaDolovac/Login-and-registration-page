<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.php" media="screen">

    <title>Registration</title>
</head>
<body>
<div class="nav">
    <ul>
       <li><a href="./reg.php">Register</a></li> 
       <li><a href="./index.php">Login</a></li>
   </ul>
</div>

<form action="registerFeedback.php" method="POST">
<div class="container">
    <h2>  Please register here! </h2>
    

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter password" name="password" required>

    <label for="password-repeat"><b>Reapet password</b></label>
    <input type="text" placeholder="reapet password" name="password-repeat" required>

    <button type="submit" onclick="confirm" class="registerBtn" > Register </button>
</div>

<div class="container-signed">
    <p> Already have an account? <a href="index.php">Sign in</a>


</form> 
    
</body>
</html>




<?php
       /*
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
    
    */



?>









<style type="text/css">

*{
    box-sizing: border-box;
}

.container{
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
a {
  color: #37AEAB;
}
 ul {
    list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: white;
}

li {
    position: sticky;
    text-align: center;
    float: left;  /* Ändra denna */
}

li a {
  display: block;
  color: #666;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:  #F56B9A;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}
.nav{
    border: 1px solid #F39440;
}

h2{
    color: #F56B9A;
    font-family: "Comic Sans MS", cursive, sans-serif;
}

p{
    font-family: "Comic Sans MS", cursive, sans-serif;

}

label{
    color: #37AEAB;
    font-family: "Comic Sans MS", cursive, sans-serif;

}

button:hover{
    color: #37AEAB;
    opacity: 0.5;
}






</style>