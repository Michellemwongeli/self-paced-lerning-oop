<?php
// METHOD CHAINING SYSTEM
//billing purpose of the portal system
class Bill {
	public $dinner = 20;
	public $dessert = 5;
	public $coldDrink = 3;
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
	$this->bill += $this->coldDrink * $person;
	return $this;
}
}
$bill = new Bill();
echo $bill->dinner(2)->dessert(1)->coldDrink(2)->bill;
echo "<br>";



?>

<?php
class Total {
	public $breakfast = 50;
	public $lunch = 300;
	public $milkShake = 500;
	public $total;

public function breakfast($person){
$this->total += $this->breakfast * $person;
return $this; 
}
public function lunch($person){
	$this->total += $this->lunch * $person;
	return $this;
}
public function milkShake($person){
	$this->total += $this->milkShake * $person;
	return $this;
}
}
$total = new Total();
echo $total->breakfast(5)->lunch(5)->milkShake(5)->total;
?>