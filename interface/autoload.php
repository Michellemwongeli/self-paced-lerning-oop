<?php
spl_autoload_register($class){
	include $class. ".php";
}
?>