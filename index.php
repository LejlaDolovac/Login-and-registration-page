<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  media="screen">
    <title> Log in</title>
</head>
<body>
<div id="Login">
<div class="nav">
    <ul>
       <li><a href="./reg.php">Register</a></li> 
       <li><a href="./index.php">Login</a></li>
   </ul>
</div>
    <h1> Please log in to your page</h1>

   <div class="input-field">
     <form  method="post" action="loginFeedback.php">
         <label for="Email">Email: <br></label>
         <input type ="text" name="email" placeholder="Name" > <br>
         <label for="Password">Password: <br></label> 
         <input type="text"  name="password" placeholder="Password" id="psw-input"> <br> 
         <input type="checkbox" onclick="myFunction()">Hide Password <br> <br>
         <button class="login" onclick="logIn()" type="submit" value="Login">Log in </>
      </form>
    </div>
   </div>    
</body>
</html>    



<script type='text/javascript'>

// Hides the password

 function myFunction() {
  var x = document.getElementById("psw-input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function logIn() {
    var home = document.getElementByClassName(login);
    if(home == "password") {
        window.location.href = "thanks.php";    
    } else {
        alert ( "somethings wrong")
    }
}
</script>





<style lang="css">

body{
    background-color: white;
    width: 100%;
    height: auto;
}

label{
    color: #37AEAB;
    font-family: "Comic Sans MS", cursive, sans-serif;

}
 h1{
     color: #F56B9A;
     text-align: center;
     text-size: 1rem;
     font-family: "Comic Sans MS", cursive, sans-serif;
     font-size: 2rem;     
 }

 p{
    font-family: "Comic Sans MS", cursive, sans-serif;

 }
 button{
     margin: 0.5rem;
 }

 button:hover{
     color:#37AEAB;
 }

  input{
      height: 1.5rem;
      width: 10rem;
      text-decoration: none;
  }

  .input-field{
    text-align:center;
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
  background-color: #F56B9A;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}

.nav{
    border: 1px solid #F39440;
}


</style>







