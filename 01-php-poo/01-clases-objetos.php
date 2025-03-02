<?php
#clase sale
class Sale
{
    #atributos públicos
    public $total;
    public $date;
    
}

$sale = new Sale();
echo gettype($sale) . "<br>";
print_r($sale);
