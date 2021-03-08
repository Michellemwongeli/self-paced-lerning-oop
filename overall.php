<?php
class Saloon{
	public $name;
	public $color;

public function setName($name){
	$this->name =$name;
}
}
$saloon = new Saloon();
$saloon->setName('Saloon');
echo $saloon->name;
?>
<?php
class Person{
	public $name = 'Michelle';
	private $password = '12345';
	protected $email = 'abc@gmail.com';

public function getPass($password){
	return $this->password;
}

}
class Human extends Person {
	function __construct(){
		echo $this->email;
	}
}
// $person = new Person();
// echo $person->name;
// echo "<br>";
// echo $person->getPass();
$human = new Human;
?>
<?php
class Details {
	public $name = 'Jeymo';
	private $password = '89076';
	protected $email = 'klm@gmail.com';


public function getPass(){
	return $this->password;
}

}
class Detailed extends Details {
	function __construct(){
		echo $this->email;
	}
}
// $details = new details();
// echo $details->name;
// $details->getPass();
$detailed = new Detailed;

?>

<?php
class Carnivore {
	public $name = 'carn';
	private $password = '67890';
	protected $email = 'wer@gmail.com';

public function getPass(){
	return $this->password;
}

}
class Omnivore extends Carnivore{
	function __construct(){
		echo $this->email;
	}
}
// $carnivore = new Carnivore();
// echo $carnivore->name;
// echo "<br>";
// echo $carnivore->getPass();
$omnivore = new Omnivore;
?>

<!-- INHERITANCE -->
<?php
class Fruits {
	public $name;
	public $color;
	public $status;

public function setName($name){
	return $this->name = $name;
}
}
class Apple extends Fruit{

}
class Mango extends Fruit{

}
$apple = new Apple();
$apple->setName('I am Apple');
echo $apple->name;
echo "<br>";

$mango = new Mango();
$mango->setName('I am Mango');
echo $mango->name;
?>

<?php
class Person {
	public $name;

public function setName($name){
	return $this->name = $name;
}
}
class Human extends Person(){

}

class Being extends Person(){

} 
$human = new Human();
$human->setName('I am a humanbeing');
echo $human->name;
echo "<br>";

$being = new Being();
$being->setName('I am a being');
echo $being->name;

?>

<?php
// METHOD CHAINING SYSTEM
class Bill {
	public $dinner = 200;
	public $dessert = 150;
	public $coldDrink = 250;
	public $bill

public function __construct(){
	$this->bill = 5;
}
public function dinner($person){
	$this->bill += $this->dinner * $person;
	return $this;
}
public function dessert($person){
	$this->bill += $this->dessert * $person;
	return $this;
}
public function coldDrink($person){
	$this->bill += $this->coldDrink * $person;
	return $this;
}
public function __destruct(){
	echo $this->sum;
}
}
$bill = new Bill();
$bill->dinner(2)->dessert(7)->coldDrink(10)->bill;
?>

<?php
class Sum {
	public $breakfast = 200;
	public $lunch = 900;
	public $dinner = 1000;

public function __construct(){
	$this->sum = 10;
}

public function breakfast($person){
	$this->sum += $this->breakfast * $person;
	return $this;
}
public function lunch($person){
	$this->sum += $this->lunch * $person;
	return $this;
}
public function dinner($person){
	$this->sum += $this->dinner * $person;
	return $this;
}
public function __destruct(){
	echo $this->sum;
}
}
$sum = new Sum();
$sum->breakfast(5)->lunch(5)->dinner(5)->sum;
?>

<?php
class Total {
	public $swimming = 200;
	public $skating = 300;
	public $driving = 500;

public function swimming($person){
	$this->total += $this->swimming * $person;
	return $this;
}
public function skating($person){
	$this->total += $this->skating * $person;
	return $this;
}
public function driving($person){
	$this->total += $this->driving * $person;
	return $this;
}
}
$total = new Total();
echo $total->swimming(5)->skating(5)->driving(5)->total;
?>