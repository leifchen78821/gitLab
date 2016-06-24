<?php
  $x = 1;
  $y = $x++; //先傳給y再++
  echo "x = $x, y = $y";
  
  echo "<br>";

  $x = 1;
  $y = ++$x; //先++再傳給y
  echo "x = $x, y = $y";
?>
