<!-- <?php
// INTERFACE SYSTEM
include "shapeInterface.php";
include "geometryInterface.php";
class Triangle implements shapeInterface, geometryInterface{

public function getArea(){
	// echo "Triangle Area";
}
public function getCircumference($length, $breadth){
	echo "agajhjj";
}
}
class Rectangle implements shapeInterface{

	public function getArea(){
		echo "Rectangle Area";
	}
}
$tri = new Triangle;
echo $tri->getArea();

$rec = new Rectangle;
echo $rec->getArea();

?> -->

<!-- 
<?php
include 'shapesInterface.php';
include 'geometryInterface';

class Triangle implements shapeInterface, geometryInterface {//implementing shape interface in Triangle class
	public function getArea(){

	}
	// echo 'Triangle Area';

public function getCircumfrence($length, $width){
	echo 'yytrdcvv';
}
}
class  Rectangle implements shapeInterface{//implementing shape interface in Rectangle class
	public function getArea(){//give function decided by the interface eg.getArea not calculateArea
		echo 'Rectangle Area';
	}
}
// $tri = new Triangle();
// echo $tri->getArea();

$rec = new Rectangle();
echo $rec->getArea();
?> -->

<?php
// include "shapesInterface.php";
// include "geometryInterface.php";
include "autoload.php";
class Triangle implements shapeInterface, geometryInterface{
	public function getArea(){
		echo 'Triangle Area';

	}
	public function getCircumference(){
		echo 'tyuiihb';
	}
}
class Rectangle implements shapeInterface {
	public function getArea(){
		echo 'Rectangle Area';

	}
}
// $tri = new Triangle();
// echo $tri->getArea();

$rec = new Rectangle();
echo $rec->getArea;
?>