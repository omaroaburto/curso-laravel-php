<?php
declare(strict_types=1);
#creación de objeto dinámico
$animal = new stdClass();
$animal->name = "Choco";
$animal->description = "Es un perro gordo";
$animal->image = "choco.png";

#convierte el objeto en array
$arr = (array) $animal;
foreach ($arr as $key => $value) {
    echo "$key: $value <br>";
}

#crear array
$arrayAnimal = [
    "name" => "Choco",
    "age" => 5,
    "image" => "choquito.jpg",
    "coutry" => "Chocoslovaquia"
];
#transformar array en object
$objectAnimal = (object) $arrayAnimal;
print_r($objectAnimal);