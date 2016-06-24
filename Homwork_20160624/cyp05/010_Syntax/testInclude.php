<?php
  //include("testDefine.php");
  require("testDefine.php");
  
  //include 和 include_once
  //都是用來引入檔案，後者可避免重複引入，故建議用後者。引不到檔案會出現錯誤息，但程式不會停止。
  
  //require 和 require_once
  //都是用來引入檔案，後者可避免重複引入，故建議用後者。引不到檔案會出現錯誤息，而且程式會停止執行。
  
  echo test;
?>