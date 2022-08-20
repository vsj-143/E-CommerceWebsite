<?php
$conn=new mysqli('localhost','root','','registerdetails');
$pid=$_GET['pid1'];
session_start();
$id=$_SESSION['informationid'];

$query="delete from cart where clientid=$id and productid=$pid";
$check=mysqli_query($conn,$query);
if(isset($check)){
    header('location:viewcart.php');
}
?>
