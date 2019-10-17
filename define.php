<?php

define("CONSTANT_BOOL", true);                     //상수 CONSTANT_BOOL의 값을 TRUE라고 정의
define("CONSTANT_INT", 1);
define("CONSTANT_FLOAT", 3.14);
define("CONSTANT_STRING", "문자열도됩니다.");
const OTHER = "또 다른 상수정의 방법";
#define("CONSTANT_INT", false);                    //ERROR
#define("1_CONSTANT_INT","상수명 숫자로 시작할 수 없습니다."); //ERROR

?>