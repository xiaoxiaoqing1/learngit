<?php 

/**
* 
*/
class Test
{
	private $num1;
	private $num2;
	public function add($num1,$num2){
		
		$dbh = new PDO('mysql:dbname=ceshi;host=127.0.0.1', 'root', 'root');
		$count = $dbh->exec("insert init a values(null,'$num1','$num2')");
		print_r($count);die;
	}
	public function aadd($num1,$num2){
		$res = $num1+$num2;
		
		print_r($res);
	}
	
}

$num1 = "3";
$num2 = "4";
$test = new Test();
$test->aadd($num1,$num2);




 ?>