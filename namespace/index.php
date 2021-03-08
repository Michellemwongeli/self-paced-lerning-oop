<?php
namespace second;
include "fns.php";
include "sns.php";


// $object = new Second\A;//qualified class name
$object = new A;//unqualified class name
echo "<br/>";
$object = new \A;// fully qualified class name in the global scope
?>