<?php
declare(strict_types= 1);
class Discount{
    protected $discount = 0;
    public function __construct(float $discount){
        $this->discount = $discount;
    }
    public function getDiscount(float $price):float{
        return $price*$this->discount;
    }
}

class SpecialDiscount extends Discount{
    private const SPECIAL_DISCOUNT = 2;
    public function getDiscount(float $price): float{
        return $price*$this->discount*self::SPECIAL_DISCOUNT;
    }
}

$discount = new SpecialDiscount(0.3);
$discountAmount = $discount->getDiscount(100);
echo $discountAmount;
