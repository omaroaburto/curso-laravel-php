<?php
declare(strict_types=1);
abstract class Animal{
    protected string $name;
    protected string $locations;
    protected int $age;
    abstract protected function makeSound():string;
}

class Cat extends Animal{
    public function __construct(string $name, string $locations, int $age){
        $this->name = $name;
        $this->locations = $locations;
        $this->age = $age;
    }
    public function makeSound():string{
        return "miauuu";
    }
}