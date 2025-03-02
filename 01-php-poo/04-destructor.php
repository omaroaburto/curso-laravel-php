<?php
class Auto{
    public $modelo;
    public $marca;
    public $idau;
    public function __construct($modelo, $marca, $idau){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->idau = $idau;
    }
    public function __destruct(){
        echo "se ha destruido el objeto";
    }
}

$auto = new Auto("modelo1","marcapola","x20045");