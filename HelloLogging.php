<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Muhammad Ali Albair");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("HelloWorld");
$log->info("Selamat Belajar Composer");

?>