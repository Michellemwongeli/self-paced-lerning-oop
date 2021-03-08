<?php
//STATIC METHODS AND PROPERTIES
class User {
	public $name;

static public function getName(){
	return 'Michelle';
}
}
// $user = new User();
// echo $user->getName();
echo User::getName();
echo "<br>";
?>

<?php
class Person {
	static public $name = 'Cyrille Webuye';

public function getName(){
	return $this->name = 'Cyrille';

}
}
echo Person::$name;
echo "<br>"; 
?>

<?php
class Human {
	static public $name = 'Michelle Nthumo';

	public function getName(){
		return $this->name = 'Michelle';
	}
}
echo Human::$name;
echo "<br>";
?>


<?php
class Being {
	static public $name = 'Griffins Ian';
	static public $number = 0;

static public function getName(){
	return self::$name = 'Griffins';
}
static public function incr(){
	self::$number +=1;
}
}
Being::getName(); //use as utility purpose or counters
echo Being::$name;
echo "<br>";
Being::incr();
echo Being::$number;
echo "<br/>";
Being::incr();
echo Being::$number;
echo "<br/>";
Being::incr();
echo Being::$number;
echo "<br/>";
Being::incr();
echo Being::$number;
echo "<br/>";
Being::incr();
echo Being::$number;
?> 