<?php
  $x = 123;
  echo gettype($x), "<br>"; //數字
  
  $x = 123.0;
  echo gettype($x), "<br>"; //double

  $x = "123.0";
  echo gettype($x), "<br>"; //字串
  
  $x = TRUE;
  echo gettype($x), "<br>"; //boolean
  
  $y = 12;
  $z = "34";
  
  echo $y + $z , "<br>";
  echo $y . $z , "<br>";
  
?>
