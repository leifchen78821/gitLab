<?php
$a = 20;
function myfunction($b) {
	//print "a=$a<br>";
	$a = 30;
	//print "a=$a<br>";
	global $a, $c;
	//print "a=$a<br>";
	return $c = ($b + $a);
	
	// 四種變數範圍比較：區域、全域、靜態、參數
	
	// 區域變數 (local variable)
	// 在 function 中宣告
	// 只能在宣告的 function 中使用 (local scope)
	// 不同的 function 中可宣告相同名稱的區域變數
	// 在宣告變數 function 結束時，區域變數也就消滅了
	// 宣告時不需使用任何關鍵字 (keyword)
		
	// 全域變數 (global variable)
	// 在 function 外宣告
	// 除了 function 中的 script不能存取外，整個網頁中的 script 都可以存取該變數( global scope )
	// 若要在 function 中使用全域變數，需使用關鍵字 global，見下例
	// 在網頁關閉時，全域變數消滅
	
	// 靜態變數 (static variable)
	// 如前面所說，區域變數在函式結束時就會消滅。
	// 不過有時候，當我們希望某區域變數不因函式結束而消滅，我們可以在第一次宣告該區域變數前，
	// 加上關鍵字-- static。
	
	// 參數 (parameter，或稱 argument)
	// 參數指的是一種呼叫函式時傳入的區域變數。其會在函式宣告時的參數列 (parameter list) 中被宣告。
	
}
print myfunction(40) + $c;
?>