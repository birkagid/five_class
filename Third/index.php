<?php

require_once "vendor\autoload.php";

use Birka\Third\Cat;
use Birka\Third\Dog;
use Birka\Third\Zoo;

$dog = new Dog("Шарик", 3, "Овчарка");
$cat = new Cat("Мурка", 5, "Серая");

$zoo = new Zoo();
$zoo->addAnimal($dog);
$zoo->addAnimal($cat);

$zoo->listAnimals();
$zoo->animalSounds();
