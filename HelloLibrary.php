<?php

use Alialbair\Belajar\Customer;

require_once __DIR__ . '/vendor/autoload.php';

$customer = new Alialbair\Belajar\Customer("Ali");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Safhira") . PHP_EOL;
?>