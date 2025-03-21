<?php

class Cat extends Animal
{
    public string $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, "Кошка");
        $this->color = $color;
    }

    public function makeSound(): string
    {
        return "Мяу!";
    }
}
