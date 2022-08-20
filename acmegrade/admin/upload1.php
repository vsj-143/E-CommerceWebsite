<?php
// include_once '../shared/config.php';
error_reporting(0);
$name=$_POST['name'];
$price=$_POST['Price'];
$details=$_POST['Details'];
$file=$_FILES['file'];
$uniq_name=date("Y_M_D_h_i");
$imgname=$file['name'];
$target="../images/$uniq_name.jpg";


echo "$target";
move_uploaded_file($file['tmp_name'],$target);
$conn= new mysqli('localhost','root','','registerdetails');
$insert="insert into ecommerce(Name,Price,Details,imgpath) values('$name',$price,'$details','$target')";
$query=mysqli_query($conn,$insert);
if(isset($query)){
    echo "successful";
    die;
}


?>