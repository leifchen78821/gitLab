<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46
// $result = $a . $b; // 1234
// $result = $a + intval($b);  // 46

//intval 決定使用進制
// echo intval("0x1a", 0), "\n"; // 使用16進制。 结果 "26" 
// echo intval("057", 0), "\n"; // 使用8進制。 结果 "47" 
// echo intval("57"),"\n"; // 使用10進制。结果57
// echo intval("42", 0), "\n"; //  结果 "42" 

echo $result;

?>