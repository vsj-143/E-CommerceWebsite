
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            img{
                width:300px;
                height: 200px;
            }
            div.product{
                display: inline-block;
                border:5px;
             background:yellow;
             margin-left:30px;
             margin: 30px;
             box-shadow:5px 5px 10px red;
            }
            .btn{
                margin-top:10px;
               margin-left:45px;
            }
            .logout{
                margin-left:1150px;
                margin-top:5px;
            }
            .bigboss{
                font-size:40px;
                background-color:red;
            }
            .price{
                height: 200px;
                
            }
            .div{
                margin-left:1200px;
                margin-top:0px;
            }
           </style>
</head>
<body>
<div class="d-flex justify-content-start bg-primary  p-4">
       <a href="viewcart.php?pid=$pid"> <button class="ms-5 btn border">view products</button></a>
       <a href="cart.php"> <button class="ms-5 btn border">Add To Cart</button></a>
      <a href="logout.php"><div class="logout"> <button class="glyphicon glyphicon-log-out bigboss"></button></div></a>


    </div>
    
        </body>

</html>
<?php
$conn=new mysqli('localhost','root','','registerdetails');
session_start();
$client=$_SESSION['informationid'];
// $pid=$_GET['pid'];
$total=0;
$cmd="select ecommerce.*,cart.* from cart join ecommerce on cart.productid=ecommerce.id where clientid=$client";
 $sqlobj=mysqli_query($conn,$cmd);
 echo "<div class='row'>";
 echo "<div class='col-9'>";
 while($row=mysqli_fetch_assoc($sqlobj))
{
    $name=$row['Name'];
$image=$row['imgpath'];
$price=$row['Price'];
$details=$row['Details'];
$pid=$row['productid'];
$total=$total+$row['Price'];



echo "<div class='product'>
<img src='$image'> 
 <div><h1 >$name</h1>
<h3>RS:-$price</br></h3>
<h5>$details<h5>

<a href='deletecart.php?pid1=$pid'>
<button class='btn btn-danger'> Delete</button>
</a>
  </div>
</div>";
}
// print_r($row);
// echo "</br>";
echo "</div>";
echo "</div>";
echo "<div class='col-3 bg-primary div'>";
if($total==0){
    echo "<div><h3 style='color:blue;'> CART IS EMPTY</h3></div>";
}
else{
echo "<div class='price'><h3>Totalprice is $total</h3>
<a href='order.php'><button class='btn btn-success'>PlaceOrder</button></a></div>";
}
echo "</div>";
echo "</div>";
?>