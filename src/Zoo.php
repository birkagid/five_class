<?php

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function listAnimals(): void
    {
        foreach ($this->animals as $animal) {
            echo "Имя: {$animal->name}, Вид: {$animal->species}, Возраст: {$animal->age}\n";
        }
    }

    public function animalSounds(): void
    {
        foreach ($this->animals as $animal) {
            echo $animal->makeSound() . PHP_EOL;
        }
    }
}
