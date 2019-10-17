<?php

$color = "red";
function echoColor() {
	global $color; // 외부의 $color변수를 참고할 수 있도록 global(전역변수)로 선언
	echo $color;
}
echoColor();

?>