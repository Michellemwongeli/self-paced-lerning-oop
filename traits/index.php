<?php

//TRAITS & MULTIPLE TRAITS
include 'mobile.php';
include 'laser.php';

class Galaxy extends Mobile{
	use Laser;

// public function power(){
// 	echo 'I am from index';
// }
public function abc(){

}


}
$obj = new Galaxy;
// $obj->range();
// echo "<br/>";
// $obj->battery();
// echo "<br/>";
echo $obj->name;

?>