<?php
/*$conn=new mysqli('localhost','root','','users');
$sqlobj=mysqli_query($conn,"select * from account");
// print_r($sqlobj);

// echo "</br>";
// print_r($row);
$row1=$mysqli_num_rows($sqlobj);
for( $i=0;$i<$row1;$i++)
{  
    $row=mysqli_fetch_assoc($sqlobj);
    echo "</br>";
    print_r($row); 
}*/
$conn=new mysqli('localhost','root','','users');
$sqlobj=mysqli_query($conn,"select * from account");
print_r($sqlobj);
$index=mysqli_num_rows($sqlobj);
for($i=0;$i<$index;$i++){
    $row=mysqli_fetch_assoc($sqlobj);
    echo "</br>";
    print_r($row);
}



?>