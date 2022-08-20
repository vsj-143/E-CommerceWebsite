<?php
$email=$_POST['email1'];
$pass=$_POST['password1'];
 $conn=new mysqli('localhost','root','','registerdetails');
$query="select * from information where E_mail='$email' and Password='$pass' limit 1";
 $sqlobj=mysqli_query($conn,$query);
$totalrows=mysqli_num_rows($sqlobj);
// echo "$totalrows";
 if($totalrows==0){
      echo "Invalid Account </br>";
      echo "<a href='login.html'>TryAgain</a>";
     }
if(!$totalrows==0){
     session_start();
     $row=mysqli_fetch_assoc($sqlobj);
     $_SESSION['informationid']=$row['id'];
     $_SESSION['informationName']=$row['FirstName'];
    header("location:view.php");
}


?>