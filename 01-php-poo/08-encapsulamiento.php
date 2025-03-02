<?php

declare(strict_types=1);
class Trabajador
{
    protected string $name;
    protected string $apellido;
    protected string $rut;
    protected string $fecha_nac;
    public function __construct(string $name, string $apellido, string $rut, string $fecha_nac)
    {
        $this->name = $name;
        $this->apellido = $apellido;
        $this->rut = $rut;
        $this->fecha_nac = $fecha_nac;
    }
}

class Operario extends Trabajador
{
    private string $maqAsignada;
    public function __construct(string $maqAsignada, string $name, string $apellido, string $rut, string $fecha_nac)
    {
        $this->maqAsignada = $maqAsignada;
        parent::__construct($name, $apellido, $rut, $fecha_nac);
    }
}
