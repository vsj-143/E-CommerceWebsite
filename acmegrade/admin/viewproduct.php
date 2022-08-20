<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
           </style>
</head>
<body>
<div class="d-flex justify-content-start bg-primary  p-4">
       <a href="admin.html"> <button class="ms-5 btn border">Add products</button></a>
       <a href="viewproduct.php"> <button class="ms-5 btn border">view products</button></a>

    </div>
    
        </body>

</html>
<?php
include_once '../shared/config.php';
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
<a href='delete.php?pid1=$pid'>
<button class='btn btn-danger'> DELETE</button>
</a>
 </div>
</div>";
}

?>