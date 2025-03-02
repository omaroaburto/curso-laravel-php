<?php
declare(strict_types= 1);
class Persona{
    private string $nombre;
    private string $apellido;
    private string $nacionalidad;
    public function __construct(string $nombre, string $apellido, string $nacionalidad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nacionalidad = $nacionalidad;
    }
    public function edad(int $edad):int{
        return $edad;
    }
}

$persona = new Persona("omaro","aburto", "chilena");
echo $persona->edad(20);
