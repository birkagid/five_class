<?php

require_once 'src\Rectangle.php';

$rectangle = new Rectangle(5, 10);
echo "Площадь: " . $rectangle->getArea() . PHP_EOL;
echo "Периметр: " . $rectangle->getPerimeter() . PHP_EOL;
