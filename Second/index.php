<?php

require_once "vendor\autoload.php";
use Birka\Second\Rectangle;

$rectangle = new Rectangle(5, 10);
echo "Площадь: " . $rectangle->getArea() . PHP_EOL;
echo "Периметр: " . $rectangle->getPerimeter() . PHP_EOL;
