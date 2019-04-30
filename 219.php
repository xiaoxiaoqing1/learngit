<?php 
/**
* 
*/
class Begin
{
	public $n = null;
	public function NumberOf1($n){
		if ($n<10) {
			$one_num = $n%10;
		}else{
			$one_num = $n%10;
			$two_num = ($n - $one_num)/10;
			$res = $two_num.$one_num.$two_num.$one_num;
			for ($i=0; $i <= 2; $i++) { 
				$three_num = substr($res,"1");
			}
			
			return 2;
		}

	}
	
}

$n = 10;
$begin = new Begin();
$res = $begin->NumberOf1($n);
print($res);



?>