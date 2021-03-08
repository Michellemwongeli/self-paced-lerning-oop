<!-- <?php

// TYPE HINTING SYSTEM IN OOP
class Book {
	public $price;

public function price(int $price){
	$this->price = $price;
}

public function authors(array $names){
	$this->authors = $names;
}
}
// $book = new Book;
// $book->price(20);
// echo $book->price;

$book = new Book;
$book->authors(['Michelle', 'Cyrille']);
print_r(book->authors);

?> -->

<!-- <?php
class Book {
	public $price;

public function price(int $price){
	$this->price = $price;
}
public function authors(array $names){
	$this->authors = $names;
}
}
// $price = new Book();
// $book->price(20);
// echo $book->price;
$book = new Book;
$book->authors(['Michelle', 'Cyrille']);
print_r($book->authors);

?> -->

<?php
iclude 'person.php';
class Book {
	public $price;

public function price(int $price){
	$this->price = $price;
} 
public function authors(Person $person){
	$this->authors = $person->names();
}
}
// $price = new Book();
// $book->price(20);
// echo $book->price;
$book = new Book;
$authorsName = new Person;
$book->authors(authorsName);
print_r($book->authors);
?>
