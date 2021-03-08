<!-- <?php

//EARLY AND LATE BINDING
class Book {
	public static $name = "Michelle";

public static function author(){
	return "The author name is: ".self::$name;
}
public static function getAuthor(){ //depends upon the object
	echo self::author();
}
}
class newBook extends Book {
	public static function author(){
		return "The authors name are: ".$this->name." and Webuye";
		// return parent::author() ." The author name is: Michelle";
	}


	
}
// Book::getAuthor();
newBook::getAuthor(); //expecting two names
// $book =new Book();
// echo $book->getAuthor();
// echo "<br/>";
// $book = new newBook;
// echo $book->getAuthor();
// echo "<br/>";
?> -->

<!-- <?php
class Novel {
	public $name = 'Cyrille';
public function author(){
	return "The author name is: ".$this->name;
}


}
$novel = new Novel();
echo $novel->author();


?> -->


<!-- <?php
class Book{
	// public status $name = 'Michelle';

public static function author(){
	return "The author name is: ". self::$name;
}
public static function getAuthor(){
	echo self::author();
}
}
class newBook extends Book{
	public static function author(){
		return "The authors names are: ".$this->name." and Webuye";
	}
}
newBook::getAuthor();
?> -->

<?php
//LATE STATIC BINDING
class Book {
	public static $name = 'Michelle';

    public static function author(){// this function is called by the getAuthor function
	return "The author name is: ". self::$name;
}
public static function getAuthor(){//this function calls the author function
	echo static::author();//when you use static you dont have to have the getAuthor function in the newBook class
}


}
class newBook extends Book {//we can get the author function in this class without having an object
	public static function author(){
	return "The author name are: ".$this->name. " and Webuye";
}
// public static function getAuthor(){
// 	echo self::author();
// }
}
newBook::getAuthor();//calling on the runtime instead of compiler time
echo "<br/>";
Book::getAuthor();
?>
