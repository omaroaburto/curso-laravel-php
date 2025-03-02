<?php
class Gato{
    public $nombre;
    public $nombre_dueno;
    public $edad;
    public function __construct($nombre, $nombre_dueno, $edad){
        $this->nombre = $nombre;
        $this->nombre_dueno = $nombre_dueno;
        $this->edad = $edad;
    }
}

$nombre="juancho";
$edad=5;
$dueno="Pedro Jara";
$gato = new Gato($nombre,$edad, $dueno);