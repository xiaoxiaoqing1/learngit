<?php 

/**
* 
*/
class Begin
{
	public function ReverseSentence($str){
		$size="";
		$new = explode(' ',$str);
		foreach ($new as $k => $v) {
			$new = explode(' ',$str);
			print_r($new);
			print_r("<br>");
			$floot = $new['9'];
			print_r($floot);die;
			// $size = $v;
			// print_r($size);
		}
	}
}
$str = "q w e r t y u i o p";
$beg = new Begin();
$beg->ReverseSentence($str);

 ?>