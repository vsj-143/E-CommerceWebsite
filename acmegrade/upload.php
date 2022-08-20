<?php
// $name=$_POST['name'];
// echo " result is$name";
// $file=$_FILES['iname'];
// $imgname=$file['name'];
// move_uploaded_file($file['tmp_name'],"../images/$imgname/");
// print_r($file);

$name=$_POST['name'];
$fileobj=$_FILES['file'];
$imgname=$fileobj['name'];
$uniq=date("Y_M_d_h_i");
move_uploaded_file($fileobj['tmp_name'],"../images/$uniq.jpg/");

// print_r($fileobj);
// echo "</br>";
// if the images are  duplicate it try to reload the same the same image to avoid these things we have to make unique name
// echo "$uniq";
$conn=new sqli('localhost','root','','ecommerce');
// $data="insert into ecommerce(Name,Price,Details,imgpath) values()"


?>

