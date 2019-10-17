<?php // php블록 시작

class Grammer // 클래스 정의
{
	public $name = "GNUWIZ"; // 변수 $name에 문자열 GNUWIZ 할당
	
	public function phpStudy($year) // 메소드정의
	{
		echo "변수 name은 {$this->name} 입니다. <br/>"; //내용출력
		echo "변수 year은 {$year} 입니다. <br/>";
		echo $this->name . $year . "<br/>";
	}

}

$year = 2019;
$grammer = new Grammer();  // CLASS Grammer 객체 생성하여 변수$grammar에 전달
$grammer->phpStudy($year); // 객체의 메소드 gnuWiz에 $year을 인자로하여 실행

?>