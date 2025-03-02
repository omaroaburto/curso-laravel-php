<?php

declare(strict_types=1);
class Location
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }


    #se cumple la inmutabilidad, no se modifican los valores del locación
    public function move(float $x, float $y): Location
    {
        $location = new Location($this->x + $x, $this->y + $y);
        return $location;
    }
}

$location = new Location(2, 1);
$newLocation = $location->move(2, 8);
echo "(".$newLocation->getX().",".$newLocation->getY().")";
