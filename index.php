<?php
// CLASSES & METHOD(FUNCTION) INSIDE CLASS
class Student {
	public $name = "Michelle";
	public $age = 21;
	public $attendance = true;
}
// storing the instance(object) of the class into a variable called students...class is used as an object
$student = new Student();
echo $student->name = "Jeymo";
echo "<br>";
echo $student->age;
echo "<br>";
echo $student->attendance;
echo "<br>";
?>
<?php
class Person {
	public $name;
	public $age;
	public $attendance;

public function PerDetails($name, $age, $attendance){
	$this->name = $name;
	$this->age = $age;
	$this->attendance = $attendance;

}
}
$class10 = new Person();
$class10->PerDetails('Michelle', 21, true);
echo $class10->name;
echo "<br>";
echo $class10->age;
echo "<br>";
echo $class10->attendance;
echo "<br>";

?>

<?php
class Human {
	public $name;
	public $age;
	public $attendance;

public function PerDetails($name, $age, $attendance){
	$this->name = $name;
	$this->age = $age;
	$this->attendance = $attendance;
}
}
$class10 = new Person();
$class10->PerDetails('Cyrille', 21, true);
echo $class10->name;
echo '<br>';
?>

<?php
class Being {
	public $name;
	public $age;
	public $attendance;

public function Details($name, $age, $attendance){
	$this->name = $name;
	$this->age = $age;
	$this->attendance = $attendance;
}
}

$kangaroo = new Being();
$kangaroo->Details('Griffins', 5, true);
echo $kangaroo->name; 
echo "<br>";
echo $kangaroo->age;


?>