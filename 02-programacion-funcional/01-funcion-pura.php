<?php
declare(strict_types=1);
class Counter{
    public int $count = 0;
}

$counter = new Counter();

//Esta funcion no es pura porque modifica el elemento externo
function show(Counter $counter):string{
    $counter->count++;
    return "$counter->count <br>";
}

echo show($counter);
echo show($counter);
echo show($counter);
echo show($counter);

#es una función pura porque los elementos externos no se modifican
function add(float $a, float $b):float{
    return $a+$b;
}
echo "función pura<br>";
echo add(2,4);
echo add(2,4);
echo add(2,4);
echo add(2,4);