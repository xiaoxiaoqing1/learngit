<?php 

/**
* 
*/
class Begin
{
	private $wzq = array();
	private $sum;
	public function FindNumbersWithSum($wzq,$sum){
		// print_r($wzq);
		// echo "<br>";
		// print_r("$sum");
		$res = $wzq[0]+$wzq[1];
		$arr = array($wzq[0],$wzq[1]);
		return $arr;
	}
}


$wzq = ['1','2','3','4','5'];
$sum = "3";
$be = new Begin();
$res = $be->FindNumbersWithSum($wzq,$sum);
print_r($res);




 ?>