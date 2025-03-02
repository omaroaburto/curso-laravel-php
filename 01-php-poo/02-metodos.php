<?php
class Perro{
    public $nombre;
    public $edad;
    public function ladrar(){
        echo "El perro ladra";
    }
}
$perro = new  Perro();
$perro->nombre ="choco";
$perro->edad=3;
$perro->ladrar();