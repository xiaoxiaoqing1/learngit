<?php 

/**
* 
*/
class Begin
{
	public function find($target,$array){
		$arrone = $array['1'];
		$one = array_count_values($arrone);
		print_r($one);die;
		foreach ($array as $k1 => $v1) {
			print_r($v1);

		}
	}
}

$begin = new Begin();
$target = 7;
$array = array('0'=>'1,2,3,4','1'=>'5,6,7,8','2'=>'9,10,11');
$begin->find($target,$array);

 ?>