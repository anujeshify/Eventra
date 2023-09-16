<?php
$con=mysqli_connect("localhost","root","","project");
$sql="select * from venue";
$result= mysqli_query($con,$sql);
$sql2="select * from venue order by ven_price";
$result2= mysqli_query($con,$sql2);
$sql3="select * from venue order by ven_price desc";
$result3= mysqli_query($con,$sql3);
$sql4="select * from venue order by ven_ratings desc";
$result4= mysqli_query($con,$sql4);

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

session_start();
$id=$_SESSION['userid'];
$bill=$_SESSION['bill'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
<head>
   
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

   <title>Hello, world!</title>
   <style>
    #filter{
        display: inline-block;
        position:absolute;
        top: 120px;
        left: 40%;
        border: 2px solid black;
    }
    #tab{width: 1300px;;
        position:absolute;
        top: 200px;
        left: 8%;
        
        
    }
    .top{
            color: black;
        }
        body{padding: 0px;
            margin: 0px;
    background-image: url("Screenshot 2022-12-02 201847.jpg");
background-repeat: no-repeat;
background-size: 100%;}
.book{
  display: inline;
  position: fixed;
  
  
  left: 42%;
  top: 570px;
  

}
   
   </style>
</head>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#">EVENTRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="eventra.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
</u1>
</nav>
<body>
<div class="top">
<?php
echo("LOGIN ID: ");
echo $id;
?>
</div>
  <div  style="align-self: center;">
  <form method="get" action="venue.php" id="filter"> 
  <select name="taskOption">
  <option  value="def">Display All</option>
    <option value="asc">Ascending price</option>
    <option value="desc">Descending price</option>
    <option value="rating">Best rating</option>
    
  </select>
  <input type="submit" name="submit" value="Apply"/>
  
</form>
  </div>
</select>


    <?php
if(isset($_GET['submit']))
{
    $select1 = $_GET['taskOption'];
    switch ($select1) {
      case 'def':
        ?>
        <table border="2px" id="tab" >
    <tr>
        <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
    </tr>
    <?php
    while($rows= mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
        <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
        </tr>
    <?php
    }
    break;
    ?>

<?php
        case 'asc':
          ?>
          <table border="2px" id="tab" >
          <tr>
          <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
          </tr>
          <?php
          while($rows= mysqli_fetch_assoc($result2))
          {
              ?>
              <tr>
              <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
              </tr>
          <?php
          }
          ?>
          <?php
            break;
        case 'desc':
          ?>
          <table  border="2px" id="tab" >
          <tr>
          <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
          </tr>
          <?php
          while($rows= mysqli_fetch_assoc($result3))
          {
              ?>
              <tr>
              <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
              </tr>
          <?php
          }
          ?>
          <?php
            break;
         case 'rating':
          ?>
          <table  border="2px" id="tab" >
          <tr>
          <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
          </tr>
          <?php
          while($rows= mysqli_fetch_assoc($result4))
          {
              ?>
              <tr>
              <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
              </tr>
          <?php
          }
          ?>
          <?php
              break;
            
          case 'companywithbest':
                ?>
                <table  border="2px" id="tab" >
                <tr>
                <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
                </tr>
                <?php
                while($rows= mysqli_fetch_assoc($result5))
                {
                    ?>
                    <tr>
                    <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
                    </tr>
                <?php
                }
                ?>
                <?php
                    break;
                    case 'companywithbest':
                ?>
                <table  border="2px" id="tab" >
                <tr>
                <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
                </tr>
                <?php
                while($rows= mysqli_fetch_assoc($result5))
                {
                    ?>
                    <tr>
                    <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_rating']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
                    </tr>
                <?php
                }
                ?>
                <?php
                    break;
                    case 'companywithcheap':
                      ?>
                      <table  border="2px" id="tab" >
                      <tr>
                      <th>Venue Id</th>
        <th>Venue Name</th>
        <th>Venue contact</th>
        <th>Venue rating</th>
        <th>Company id</th>
        <th>Venue price</th>
        <th>Venue review</th>
                      </tr>
                      <?php
                      while($rows= mysqli_fetch_assoc($result6))
                      {
                          ?>
                          <tr>
                          <td><?php echo $rows['ven_id']; ?></td>
                  <td><?php echo $rows['ven_name']; ?></td>
                  <td><?php echo $rows['ven_contact']; ?></td>
                  <td><?php echo $rows['ven_ratings']; ?></td>
                  <td><?php echo $rows['comp_id']; ?></td>
                  <td><?php echo $rows['ven_price']; ?></td>
                  <td><?php echo $rows['ven_review']; ?></td>
                          </tr>
                      <?php
                      }
                      ?>
                      <?php
                          break;
              
        
        
    }
  }
?>
<div class="book">
<p><h6>Enter Venue Id you wish to book</h6></p>
<form action="venue.php" method="get" >
  <input type="number" name="desiredid">
  <input type="submit" name="book" value="book now">
  <input type="submit" name="empty" value="Empty your cart">
</form>
</div>
<?php
if(isset($_GET['book']))
{
  $desiredid=$_GET['desiredid'];
$sqlbooking="select ven_price from venue where ven_id='".$desiredid."'";
$resulted=mysqli_query($con,$sqlbooking);
$print=mysqli_fetch_array($resulted);
$bill=$bill + $print[0];

$sql5="update client_table set bill= bill+'".$bill."'where client_id='".$id."'";
mysqli_query($con,$sql5);
Redirect('payment.php', false);
}
if(isset($_GET['empty']))
{
  

$sql9="update client_table set bill= 0 where client_id='".$id."'";
mysqli_query($con,$sql9);
echo("Your cart is empty now!");
}
?>

</table>
</body>
</html>