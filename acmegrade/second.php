<?php
 if(isset($_GET['age'])){{
    

$age=$_GET['age'];
if($age>=18){
    echo "<h1 style=' color:green;'> you are Major and eligible for sex </h1>";}
    else {
        echo "<h1 style='color:red;'>Yor are Minor and not eligible for sex</h1>";
    }
    
   }
 }

 else{
     echo "input is missing";
 }

   
?>