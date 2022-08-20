<?php
if(isset($_GET['check'])){
    echo "checking";
    die;
}
if(!isset($_GET['age'])){
     echo "query params are missing";
     die;
}
$age=$_GET['age'];
if(empty($age)){
    echo "<h1>Age is not given</h1>";
    die;
}
$age=$_GET['age'];

if($age>=18){

    echo "<h1>Major</h1>";
    die;
}
    echo "<h1>Minor</h1>";
    ?>
