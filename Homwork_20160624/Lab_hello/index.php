<!DOCTYPE html>

<?php 
session_start();
$tel="";
if ($_POST["btnOK"]) {
    if ($_POST["txtName"]) {
    $_SESSION["userName"] = $_POST["txtName"];
    header("location: hello.php");
    }
    $txtTel="tel";
}
?>

<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post" action="index.php" >
            <!-- 
            action="index.php" 若為回傳回本頁
            可直接不寫
            -->
            Your Name : <input type="text" name="txtName" />
            <!--onfocus="if(this.value=='請輸入文字') this.value='';" onblur="if(this.value=='') this.value='請輸入文字';"  value="請輸入文字"-->
            <p>
            Passwords : <input type="password" name="Passwords" />
            <p>
            Your Tel : <input type="text" name="txtTel" value="<?php echo $_POST["tel"]?>" />    
            <p>
            <input type="submit" name="btnOK" value="OK" />
        </form>
        
        <div>
            >>> <?php 
                if ($_POST["btnOK"]) {
                    echo "資料不齊全";
                    }
                ?> <<<
            <p>
        </div>
        
    </body>
</html>