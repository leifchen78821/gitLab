<?php
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";  // .= 字串相加回傳
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);
?>