<?php
// INHERITANCE
class Fruits {
	public $name;

public function setName($name){
	$this->name = $name;
}

}
class Apple extends Fruits {
	
public function Juice(){
	echo 'juice';
}
}
class Mango extends Fruits {
	
}
$apple = new Apple();
$apple->setName('My apple');
echo $apple->name;
echo "<br>";
$mango = new Mango();
$mango->setName('My mango');
echo $mango->name;
echo "<br>";
?>

<?php
class parentClass{
	public $name;
	// public $gender


public function setName($name){
	$this->name = $name;

}
}
class childClass extends parentClass{

}

$childClass = new childClass();
$childClass->setName('My name');
echo $childClass->name;
echo "<br>";

?>

<?php
class mainclass{
	public $name;
	public $age;

public function setname($name){
	$this->name = $name;
}
}
class minorClass extends mainClass{

}
$minorClass = new minorClass();
$minorClass->setName('My name');
echo $minorClass->name;
echo "<br>";
?>

<?php
class majorClass{
	public $gender;

public function setGender($gender){
	$this->gender = $gender;
}
}
class smallClass extends majorClass{

}
$smallClass = new smallClass();
$smallClass->setGender('female');
echo $smallClass->gender;
?>