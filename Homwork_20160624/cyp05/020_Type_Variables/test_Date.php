<?php
  $x = getdate();
  echo gettype($x), "<br>";
  echo var_dump($x), "<p>"; //getdate()詳細資料
  // echo "Date is " . $arr['mday'] . " " . $arr['weekday'] . " " . $arr['year']; 
  // echo "Time is " . $arr['hours'] . ":" . $arr['minutes']; 
  //拉出getdate()內的值即可使用
  
  $x = date('Y-m-d H:i:s');
  echo gettype($x), "<br>";
  echo $x, "<p>";
  
  $x = gmdate('Y-m-d H:i:s');
  echo gettype($x), "<br>";
  echo $x, "<p>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<p>";
  echo gettype($x), "<p>";
  
  // 该函数预期接受一个包含美国英语日期格式的字符串并尝试将其解析为 Unix 时间戳
  // （自 January 1 1970 00:00:00 GMT 起的秒数）
  // 其值相对于 now 参数给出的时间，如果没有提供此参数，则用系统当前时间。
  // strtotime(time,now)
  // 範例
  // echo(strtotime("now"));
  // echo(strtotime("3 October 2005"));
  // echo(strtotime("+5 hours"));
  // echo(strtotime("+1 week"));
  // echo(strtotime("+1 week 3 days 7 hours 5 seconds"));
  // echo(strtotime("next Monday"));
  // echo(strtotime("last Sunday"));
?>