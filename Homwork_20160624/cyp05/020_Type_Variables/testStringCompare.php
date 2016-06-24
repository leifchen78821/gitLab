<?php

// 若比較值同為數字，正常比較
// 若比較值為字串，則各由第一個字元進行比較

$x = "123AB";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "ABC";
$y = "AB";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";


$x = "ABC";
$y = "BA";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";


$x = "123";
$y = "12";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
		
		
?>