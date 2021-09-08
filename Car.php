<?php

class Car
{
    private string $name;
    private string $type;
    private string $fuel;
    private string $gearbox;
    private int $year;

    public function __construct(string $name, string $type, string $fuel, string $gearbox, int $year)
    {
        $this->name = $name;
        $this->type = $type;
        $this->fuel = $fuel;
        $this->gearbox = $gearbox;
        $this->year = $year;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getFuel(): string
    {
        return $this->fuel;
    }

    public function getGearbox(): string
    {
        return $this->gearbox;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}