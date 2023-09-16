<?php
$host="localhost";
$user="root";
$password="";
$db="project";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['login']))
{
    $uid=$_GET['uid'];
    $pass=$_GET['password'];

    $sql1="select * from client_table where client_ID='".$uid."' and password='".$pass."'";

    $result=mysqli_query($con,$sql1);

    




  session_start();
  $_SESSION['userid']=$uid;
  $_SESSION['bill']=0;





    if(mysqli_num_rows($result) == 1)
    {
      Redirect('services.php', false);
    }
    else{echo("wrong!!");}

  }
  function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
  if(isset($_GET['register']))
  {
    Redirect('register.php', false);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<style>
  body{padding: 0px;
            margin: 0px;
    background-image: url("blur.jpeg");
background-repeat: no-repeat;
background-size: 100%;}
  .container{height: 500px;
    width: 500px;
    position:absolute;
    top: 25%;
    left: 15%;
    border: 2px solid black;
               border-radius: 5px;
               
               display: flex;
               display: inline-block;
               padding: 20px;}
               .container p{
                align-self: center;
                align-items: center;
                font-size: 25px;
               }
  #mail{margin: 5px;
  border: 1px solid black;
 font-size: 20px;
 width: 100%;
 }
  #pass{margin: 5px;
  border: 1px solid black;
 font-size: 20px;
 width: 100%;
 }
 #loginbut{width: 100%;
  margin: 5px;
  border: 1px solid black;
 font-size: 20px;
 }
 #regbut{width: 100%;
  margin: 5px;
  border: 1px solid black;
 font-size: 20px;
 padding-left: 35%;
 padding-right: 35%;}
 p{text-align: center;
}
 #loginbut:hover{
  background-color: rgb(205, 205, 205);
 }
 #regbut:hover{
  background-color: rgb(205, 205, 205);
 }
 #secp{color: white;}
</style>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Eventra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="eventra.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
         
         
        </ul>
        <form class="d-flex" role="search" method="get" action="login.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <p>Enter Login Details</p>
    <div>
      <form class="form" action="login.php" method="get">
        <input id="mail" type="text" name="uid"  placeholder="user id"><br>
        <input id="pass" type="text" name="password"  placeholder="password"><br>
        <input id="loginbut" type="submit" name="login" value="Login"><br>
        <p id="secp">Not registered? </p><input id="regbut" type="submit" name="register" value="Register" >

      </form>
    </div>
  </div>
</body>
</html>