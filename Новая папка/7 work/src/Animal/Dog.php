<?php

namespace Animal;

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Гав";
    }

    public function getType(): string
    {
        return "Млекопитающее";
    }

    public function processInput(string|int $input): string|int
    {
        if (is_numeric($input)) {
            return (int)$input;
        }
        return (string)$input;
    }
}
