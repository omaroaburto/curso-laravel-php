<?php
declare(strict_types=1);

$suma = function (int $a, int $b): int {
    return $a + $b;
};

function multiplicar(int $a, int $b): int {
    return $a * $b;
};

#función de orden superior
function show(callable $fn, int $a, int $b): void{
    echo $fn($a,$b)."<br>";
}
#función de primera clase en parámetros
show($suma, 5,4);
#función normal en parámetros
show("multiplicar",5,4);