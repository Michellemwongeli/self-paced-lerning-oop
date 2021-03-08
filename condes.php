<?php
// CONSTRUCT & CONSTRUCT
class Sum {
	public $dinner = 20;
	public $dessert = 15;
	public $coldDrink = 10;
	public $sum;
// every time im loading the object(instance) of the sum class the construct function is called automatically
public function __construct(){
	$this->sum = 4;
}	

public function dinner($person){
	$this->sum += $this->dinner * $person;
	return $this;
}
public function dessert($person){
	$this->sum += $this->dessert * $person;
	return $this;
}
public function coldDrink($person){
	$this->sum += $this->coldDrink * $person;
}
public function __destruct(){
	echo $this->sum;
}
}
$sum = new Sum();
$sum->dinner(5)->dessert(5)->sum;


?>

<?php
class Bill {
	public $dinner = 40;
	public $dessert = 50;
	public $coldDrink = 70;
	public $bill;

public function __construct(){
	$this->bill = 50;
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
	echo $this->bill;
	echo "<br>";
} 
}
$bill = new Bill();
$bill->dinner(7)->dessert(8)->coldDrink(9)->bill;

?>

<?php
class Bill {
	public $dinner = 20;
	public $dessert = 30;
	public $coldDrink = 50;
	public $bill;

public function __construct(){
	$this->bill = 50;
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
public function destruct(){
	echo $this->bill;
}
}
$bill = new Bill();
$bill->dinner(2)->dessert(3)->coldDrink(4)->bill;

?>

<?php
class Bill {
	public $dinner = 40;
	public $dessert = 60;
	public $coldDrink = 80;
	public $bill;

public function dinner($person){
	$this->bill += $this->dinner * $person;
	return $this;
}
public function dessert($person){
	$this->bill += $this->dessert * $person;
	return $this;
}
public function coldDrink($person){
	$this-> += $this->coldDrink * $person;
	return $this;
}
$bill = new Bill();
$bill->dinner(2)->dessert(3)->coldDrink(4)->bill;
}
?>