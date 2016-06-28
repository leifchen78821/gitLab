<?php 

if (isset($_GET["logout"]))
{
	setcookie("userName", "Guest", time() - 3600);
	header("Location: index.php");
	exit();
}

if (isset($_POST["btnHome"]))
{
	header("Location: index.php");
	exit();
}

if (isset($_POST["btnOK"]))
{
    $sUserName = $_POST["txtUserName"];
    $sUserPassword = $_POST["txtPassword"];
    
    if (trim($sUserName) == ""){
      echo "<script language='JavaScript'>";
  	  echo "alert('帳號不可空白')";
      echo "</script>";
    }
    else if (trim($sUserPassword) == ""){
      echo "<script language='JavaScript'>";
  	  echo "alert('密碼不可空白')";
      echo "</script>";
    }
  	else
  	{
  		setcookie("userName", $sUserName);
  		if (isset($_COOKIE["lastPage"]))
  		  header(sprintf("Location: " . $_COOKIE["lastPage"]));
  		else
  		   header("Location: index.php");
  		exit();
  	}
	
}

?>


<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Lab - Login</title>
  <link rel="stylesheet" type="text/css" href="css_login.css">
</head>

<body>
  <form id="form1" name="form1" method="post" action="login.php">
    <div align="center" id="back_index" style="">
      <span style="color: white;">會員系統 - 登入<br><br><br><br><br><br><br><br></span>
        <div id="circle" style=""> 
        <div id="long02" style="top: 30% ;"></div>
        <div id="long03" style="top: 33% ;"></div>
        <div id="long01" style=""></div>
        <div id="long02" style=""></div>
        <div id="long03" style=""></div>
        <div style="color: #778899 ; top: 52% ; left: -410px ;"><br>帳號</div>
        <div valign="baseline"><input type="text" name="txtUserName" id="txtUserName" value="<?php echo $sUserName ; ?>" /></div>
        <div style="color: #778899 ; top: 52% ; left: -410px ;"><br>密碼</div>
        <div valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></div>
      
      
            
    </div>
    <span style="">
      <input type="submit" class="but" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" class="but" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" class="but" name="btnHome" id="btnHome" value="回首頁" />
    </span>
  </div>
  
  </form>
</body>

</html>