<?php
// ACCESS MODIFIERS
class User {
	public $name ='Michelle'; //can be accessed anywhere
	private $password = '12345';//cannot be accessed by any other system other than the class that it's in
	protected $email = 'abc@gmail.com';//cannot be accessed by any object but can be accessed by the extending classes
// when you create the function inside the class no one can directly access the password
public function getPass(){
	return $this->password;
}

}
class Admin extends User {
	function __construct(){
		echo $this->email;
		echo "<br>";
	}

}

// create an instance of the user
$admin = new Admin();
// echo $user->name;
// echo "<br>";
// echo $user->getPass();
?>

<?php
class Client {
	public $name = 'Cyrille';
	private $password = '45678';
	protected $email = 'efg@gmail.com';

public function getPass(){
	return $this->password;
}

}
class Director extends Client{
	function __construct(){
		echo $this->email;
		echo "<br>";
	}
}
// $client = new Client();
// echo $client->name;
// echo "<br>";
// echo $client->getPass();
$director = new director();

?>

<?php
class Consumer {
	public $name = 'Joy';
	private $password = '7890';
	protected $email = 'jkl@gmail.com';

public function getPass(){
	return $this->password;
}
}
class Boss extends Consumer {
	function __construct(){
		echo $this->email;
		echo "<br>";
	}
}
$boss = new Boss();
// $consumer = new Consumer();
// echo $consumer->name;
// echo "<br>";
// echo $consumer->getPass();
?>

<?php
class Customer {
	public $name = 'Ian';//can be accessed anywhere
	private $password = "65453";//cannot be accessed by any other system other than the class that it's in
	protected $email = 'hij@gmail.com'; //cannot be accessed by any object but can be accessed by the extending classes

public function getPass(){
	return $this->password;
}
}
class Supervisor extends Customer{
	public function __construct(){
		echo $this->email;
	}
}
// $customer = new Customer();
// echo $customer->name;
// echo "<br>";
// echo $customer->getPass();
$supervisor = new Supervisor; 
?>