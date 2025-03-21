<?php

class Dog extends Animal
{
    public string $breed;

    public function __construct(string $name, int $age, string $breed)
    {
        parent::__construct($name, $age, "Собака");
        $this->breed = $breed;
    }

    public function makeSound(): string
    {
        return "Гав-гав!";
    }
}
