<?php 
/**
* 
*/
class Begin
{
	public function CountSteps($x,$y){
		$arr = array($x,$y);
		$res = count($arr);
		return $res;
	}
}

$x = 50;
$y = 70;
$begin = new Begin();
$result = $begin->CountSteps($x,$y);
print_r($result);



?>