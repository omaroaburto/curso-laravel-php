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
    //TODO: getters
    public function getName(): string
    {
        return $this->name;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getRut(): string
    {
        return $this->rut;
    }

    public function getFechaNac(): string
    {
        return $this->fecha_nac;
    }
    //TODO: setter
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function setRut(string $rut): void
    {
        $this->rut = $rut;
    }

    public function setFechaNac(string $fecha_nac): void
    {
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
    public function setMaqAsignada(string $maqAsignada): void
    {
        $this->maqAsignada = $maqAsignada;
    }
    public function getMaqAsignada(): string
    {
        return $this->maqAsignada;
    }
}
