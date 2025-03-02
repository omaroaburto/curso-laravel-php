<?php
declare(strict_types=1);
$base = 5;
function show(callable $fn, int $a, int $b): void
{
    echo $fn($a, $b) . "<br>";
}

#use puede llevar muchas variables use($a, $a1, ...., $an)
$sum =  function(int $a, int $b)use($base):int{
    return $a + $b+$base;
}; 

show($sum, 1, 5); 