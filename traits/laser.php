<?php
include 'projector.php';

trait Laser {
	public $name = "Michelle";
	use projector;
	public function power(){
		echo '10 mW';
	}
		abstract public function abc();
}
?>