<!-- <?php
class Circle {
	public function area($radius){
		return $radius * $radius * 3.14;
	}
}
$circle = new Circle();
echo $circle->area(5);
?> -->

<?php
class Round {
	const PI =3.147;
	public function area($radius){
		return $radius * $radius * self::PI;
	}
}
$round = new Round();
echo $round->area(10);
echo "<br/>";
echo $round::PI;
?>

