<?php
$a=$_POST['age'];
echo "age is $a</br>";
$name=$_POST['name'];
echo "Name is $name </br>";
$gender=$_POST['Gender'];
echo "Gender is $gender";
$conn= new mysqli('localhost','root','','student');
$cmd="insert into students(name,Age,Gender) values('$name',$a,'$gender')";

mysqli_query($conn,$cmd);
header("location:fullstack1.html");

?>