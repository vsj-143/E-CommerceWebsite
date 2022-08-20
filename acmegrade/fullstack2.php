<?php
$gmail=$_POST['gmail'];
$password=$_POST['password'];
echo "<h1>your Username is $gmail</h1></br>";
echo "<h1>your password is $password</h1></br>";
$conn=new mysqli('localhost','root','',users);
$user1="insert into account(UserName,password)values('$gmail','$password')";
mysqli_query($conn,$user1);
header('location:fullstack2.html');




?>