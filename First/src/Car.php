<?php

namespace Birka\First;

class Car
{
    private string $mark;
    private string $model;
    private int $yearRelease;
    private int $mileage;

    public function __construct(string $mark, string $model, int $yearRelease, int $mileage)
    {
        $this->mark = $mark;
        $this->model = $model;
        $this->yearRelease = $yearRelease;
        $this->mileage = $mileage;
    }

    public function getInfo(): string
    {
        return "Машина: {$this->mark}, модель: {$this->model}, год: {$this->yearRelease}, пробег: {$this->mileage} км";
    }

    public function drive(int $km): void
    {
        $this->mileage += $km;
    }

    public function getMileage(): string
    {
        return "Пробег: {$this->mileage} км";
    }
}
