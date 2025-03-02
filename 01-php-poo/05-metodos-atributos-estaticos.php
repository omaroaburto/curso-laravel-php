<?php
class Arbol{
    private $nombre;
    private $altura;
    public static $edad = 0; 
    
    public function __construct($nombre, $altura){
        $this->nombre = $nombre;
        $this->altura = $altura;
        self::$edad++;
    }
    public static function noEsPera(){
        return "no es pera";
    }
}

$arbol = new Arbol("naranjo", 20);
echo Arbol::$edad;
echo Arbol::noEsPera();