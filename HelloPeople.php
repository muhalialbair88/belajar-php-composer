<?php

require_once __DIR__ . '/vendor/autoload.php';

use Alialbair\Data\People;

$people = new People("Ali");

echo $people->sayHello("Safhira") . PHP_EOL;

?>