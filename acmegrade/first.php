<?php

echo "<div style='width: 30%; background-color:red; padding: 20px;'>
<h1>iam rendering</h1>
<input placeholder='enter the name'>
<button>submit</button>
    
      <div>";

      $a="sandeep";
  echo "value is $a";
  $globalval=$_GET['a'];
  $globalval2=$_GET['b'];
  echo "recieved values are $globalval and $globalval2";

?>