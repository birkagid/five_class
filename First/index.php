<?php

require_once "vendor\autoload.php";

use Birka\First\Car;

$car = new Car("BMW", "X5", 2020, 50000);
echo $car->getInfo() . PHP_EOL;
$car->drive(1000);
echo $car->getMileage() . PHP_EOL;
