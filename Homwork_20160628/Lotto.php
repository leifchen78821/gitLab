<?php
if (isset($_POST["btnOK"])) {
    mt_srand((float) microtime() * 1000000); /*產生隨機數種子*/
    $lottery = array(); /*宣告陣列*/
    for ($i = 1; $i <= 42; $i++) {
        $lottery[] = $i; /*將所有的數字寫入陣列*/
    }
    $ro = array_rand($lottery, 7); /*使用array_rand函式從$lottery陣列隨機抓出7個數字*/
}
?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>樂透</title>
    </head>

    <body>
        <form method="post" action="Lotto.php">
            <input type="submit" name="btnOK" id="btnOK" value="抽獎" /><br>
            樂透彩號碼 :
            <div><?php 
            for ($j = 0; $j <= 6; $j++) {
                echo $lottery[$ro[$j]] . ' '; /*再用for迴圈將亂數抓出的數字印出*/
            }
            ?></div>
        </form>
    </body>

</html>