<?php
 $del=$_GET['pid1'];
echo "deleted productid=$del";
$conn= new mysqli('localhost','root','','registerdetails');

$cmd="delete from ecommerce where id=$del";
$resultquery=mysqli_query($conn,$cmd);
 if($resultquery)
 {
    header('location:viewproduct.php');
    
 }
 else{
    echo "error";
 }


?>