<?php
$conn=new mysqli('localhost','root','','registerdetails');
session_start();
 $clientid=$_SESSION['informationid'];
 $curdate=date('Y-m-H');
 $query="update cart set orderid=1,time=$curdate where clientid=$clientid";
 $check=mysqli_query($conn,$query);
 if(isset($check)){
    echo "successful";
 }

?>