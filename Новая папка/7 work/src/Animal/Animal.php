<?php

namespace Animal;

abstract class Animal
{
    abstract public function makeSound(): string;

    public function getType(): string
    {
        return get_class($this);  // Получаем имя класса
    }

    public function getInfo(): string
    {
        return $this->getType() . ": " . $this->makeSound();
    }

    abstract public function processInput(string|int $input): string|int;
}
