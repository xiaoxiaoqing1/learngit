<?php 

/**
* 
*/
class Test
{
	public function combine($arr_A,$arr_B){
		$result = array_merge($arr_A,$arr_B);
		$res = asort($result);
		foreach ($result as $key => $val) {
			    echo "$val\n";
			}
	}

}



$arr_A = array('1','2','9');
$arr_B = array('6','7','8');
$test = new Test();
$res = $test->combine($arr_A,$arr_B);


 