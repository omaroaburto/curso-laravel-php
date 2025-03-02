<?php

declare(strict_types=1);

function show(callable $fn, int $a, int $b): void
{
    echo $fn($a, $b) . "<br>";
}

#arrow function
$sum =  fn(int $a, int $b) => $a + $b;

show($sum, 1, 5);
show(fn($a, $b):int => $a - $b, 2, 11);
