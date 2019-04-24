<?php 
/**
* 
*/
class Ha
{
	static private $n = null;
	private $arr = null;
	public function Sum_Solution($n){
		for ($i=0; $i <=$n ; $i++) { 
			$i += $i;
		}
		$arr = $i-1;
		return $arr;
	}
}
$n = "3";
$ha = new Ha();
$res = $ha->Sum_Solution($n);
print_r($res);


 ?>