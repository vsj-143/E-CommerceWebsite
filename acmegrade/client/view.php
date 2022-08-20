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
                margin-left:280px;
            }
            .stick-to-Add{
                position:absolute;
                color:blue;
                z-index: 10;
            }
            .butt{
                position:absolute;
                margin-left:1200px;
            }
            .butt1{
                position:absolute;
                margin-left:1050px;
            }
            .text{
                position:absolute;
             font-family:arial;
             margin-left:600px;
             margin-bottom:6px;
             margin-top:0px;
             
            }
            h2{
                color:black;
                font-family:roman;
                font-style:italic;
                font-size:40px;

            }
            
           </style>
</head>
<body>
<div class="d-flex justify-content-start bg-primary  p-4">
    <div class="text"><h2>TimeZone</h2></div>
      <div class="butt"> <a href="viewcart.php?pid=$pid"> <button class="ms-5 btn border">view products</button></a></div>
      <div class="butt1"> <a href="cart.php"> <button class="ms-5 btn border">Add To Cart</button></a></div>
<a href="logout.php"><div class="logout"> <button class="glyphicon glyphicon-log-out bigboss"></button></div></a>


    </div>
    
        </body>

</html>
<?php
$conn=new mysqli('localhost','root','','registerdetails');
session_start();
if(!isset($_SESSION['informationName'])){
   echo "unauthorized access </br>";
   echo "<a href='login.html'>Login page</a>";
    die;
}
$clientname=$_SESSION['informationName'];
echo "<h4 style='color:grey;'> welcome  <strong>$clientname</strong></h4>";
echo "";

$clientid=$_SESSION['informationid'];
$query1="select * from cart where clientid=$clientid";
$cartobj=mysqli_query($conn,$query1);
$cartcount=mysqli_num_rows($cartobj);
echo "<div class='stick-to-Add'>$cartcount</div>";

$obj=mysqli_query($conn,"select * from ecommerce");
while($row=mysqli_fetch_assoc($obj)){
// print_r($row);
// echo "</br>";
$name=$row['Name'];
$image=$row['imgpath'];
$price=$row['Price'];
$details=$row['Details'];
$pid=$row['id'];

echo "<div class='product'>
<img src='$image'> 
 <div><h1 >$name</h1>
<h3>RS:-$price</br></h3>
<h5>$details<h5>

<a href='cart.php?pid1=$pid'>
<button class='btn btn-danger'> AddToCart</button>

</a>
 </div>
</div>";
}
?>
