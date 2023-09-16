<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1 {text-align: center; }
        body{padding: 0px;
            margin: 0px;
            background-image: url('bcg1.jpeg');
background-repeat: no-repeat;
background-size: 100%;}
}

        </style>

    <form name="myform" method='POST' action='register.php'>
    <h1 style="color:white">Register</h1>
        firstname<input type="text" placeholder="enter Name" name="name"  > <br> <br>
        age<input type="age" placeholder="enter age" name="age"> <br> <br>
        phone number<input type="number" placeholder="enter PhoneNumber"  name="phonenumber"> <br> <br>
        gender<input type="text" placeholder="enter gender" name="gender"> <br> <br>
        address<input type="text" placeholder="enter Address" name="address"  > <br> <br>
        profession<input type="text" placeholder="enter Profession" name="profession"  > <br> <br>
        occasion<input type="text" placeholder="enter Occasion" name="occasion"  > <br> <br>
        username<input type="text" placeholder="enter username" name="username"> <br> <br>
        password<input type="text" placeholder="enter password" name="password"> <br> <br>
        SUBMIT<input type="submit" name='submit' value="submit">
    </form>
    <?php
    $con=mysqli_connect('localhost','root',"","project");
    if(!$con){
        print('error in connecting');
    }
    else{
        print(' ');
    }
   if(isset($_POST['submit'])) 
   {$name= $_POST['name'];
   $age=$_POST['age'];
   $phone=$_POST['phonenumber'];
   $gender=$_POST['gender'];
   $address= $_POST['address'];
   $prof=$_POST['profession'];
   $ocassion=$_POST['occasion'];
   $username=$_POST['username'];
   $pass=$_POST['password'];
    
    mysqli_query($con,"use project");
    
    $sql="insert into client_table(client_name, age, phone_no, gender, address, profession, occasion, username, password )values('". $name."', $age,$phone,$gender,$address,$prof,$ocassion,$username,$pass)";
   
    
}
?>
</body>
</html>