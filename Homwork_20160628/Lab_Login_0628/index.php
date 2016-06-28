<?php 

setcookie("lastPage", "index.php");
if (isset($_COOKIE["userName"]))
  $sUserName = $_COOKIE["userName"];
else 
  $sUserName = "Guest";
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Lab - index</title>
  <link rel="stylesheet" type="text/css" href="css_login.css">
</head>

<body>
  <div align="center" id="back_index" style="">
    <span style="color: white;">會員系統 - 首頁<br><br><br><br><br><br><br><br></span>
    <div id="circle" style=""> 
    <div id="long02" style="top: 30% ;"></div>
    <div id="long03" style="top: 33% ;"></div>
    <div id="long01" style=""></div>
    <div id="long02" style=""></div>
    <div id="long03" style=""></div>
          <?php if ($sUserName == "Guest"): ?>
          <span style="" align="center" valign="baseline"><a href="login.php"><br><br>登入<br></a>
            <?php else: ?>
            <span style="" align="center" valign="baseline"><a href="login.php?logout=1"><br><br>登出<br></a>
              <?php endif; ?><a href="secret.php">會員專用頁</a>
        </tr>
      </table>
    </div>
    <span style="color : white"><?php echo "Welcome! " . $sUserName ?></span>
  </div>
</body>

</html>