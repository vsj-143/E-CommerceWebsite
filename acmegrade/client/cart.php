<?php
$conn=new mysqli('localhost','root','','registerdetails');
$pid=$_GET['pid1'];
session_start();
$client=$_SESSION['informationid'];
$cmd="insert into cart(clientid,productid) values('$client',$pid)";
$check=mysqli_query($conn,$cmd);
if(isset($check)){
   header('location:view.php');
}
?>