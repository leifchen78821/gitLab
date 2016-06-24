<?php
function ShowStar($iCount, $sWhat = "*") //預設參數 * 如果 行13 沒輸入參數
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany,"^");
?>