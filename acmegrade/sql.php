<?php
$sandeep=new mysqli('localhost','root','','student');
echo "welcome to sql";
mysqli_query($sandeep,"insert into students(name)values('phplogin')");
?>