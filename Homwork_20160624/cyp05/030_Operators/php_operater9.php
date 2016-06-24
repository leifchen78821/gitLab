<?php

$x = 100;
$y = &$x; //y值將隨x值同步

echo "x = $x </br>";
$y = 200;
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

?>