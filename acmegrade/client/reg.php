<?php
 $firstname=$_POST['FirstName'];
 $lastname=$_POST['LastName'];
 $email=$_POST['E-mail'];
 $password=$_POST['password'];
 $phn=$_POST['tel'];
 $conn= new mysqli('localhost','root','','registerdetails');
//  if(!$conn->error){
    // echo "success";
    // die;
//  }

 $infor="insert into information(FirstName,LastName,E_mail,Password,PhoneNumber) values('$firstname','$lastname','$email','$password',$phn)";
$checking=mysqli_query($conn,$infor);
 
 if ($checking){
    header('location:login.html');
 }
 else {
    echo "mailId/Phonenumber Already Exist </br>";
    echo"<a href='reg.html'> Try Again</a>";
 }


?>