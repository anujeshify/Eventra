<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background-image: url(ii6.png);
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #FFBF00;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #FFBF00;
}
</style>
<body>

<div class="container">

    <form action="GET">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Atish Mahali">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="Delhi">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state"   placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zipcode"  placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <input type="text" name="cards"  placeholder="Visa/AmericanExpress/Rupay/PaytmBank/OnePay">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="nameoncard"  placeholder="Atish Mahali">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="phone"  placeholder="+91 81303636799">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="month" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="year"  placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>  
<?php
    $con=mysqli_connect('localhost','root',"");
    if(!$con){
        print('error in connecting');
    }
    else{
        print('connected successfully');
    }
    
    
    mysqli_query($con,"use database_example");
    
    $sql="INSERT INTO paymenty (name, email, address, city, state, zipcode, cards, nameoncard, phone, month, year, cvv )
    VALUES
    ('$_POST[name]','$_POST[email]','$_POST[address]', '$_POST[city]', '$_POST[state]'. '$_POST[zipcode]', '$_POST[cards]','$_POST[nameoncard]', '$_POST[phone]', '$_POST[month]', '$_POST[year]', '$_POST[cvv]' )";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error());
    }
    echo "records added";
    
?> 
    
</body>
</html>