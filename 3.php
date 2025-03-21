<?php

require_once 'src\Animal.php';
require_once 'src\Dog.php';
require_once 'src\Cat.php';
require_once 'src\Zoo.php';

$dog = new Dog("Шарик", 3, "Овчарка");
$cat = new Cat("Мурка", 5, "Серая");

$zoo = new Zoo();
$zoo->addAnimal($dog);
$zoo->addAnimal($cat);

$zoo->listAnimals();
$zoo->animalSounds();
