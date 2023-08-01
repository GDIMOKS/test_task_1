<?php
/*class Price {
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
    }
}*/
global $item;
/*$item->prices = [
    new Price(75131),
    new Price(52121),
    new Price(312222),
    new Price(43122),
    new Price(66511),
    new Price(12311),
    new Price(43111),
    new Price(65111)
];
var_export(getMinPrice($item));*/

function getMinPrice($item) {
    usort($item->prices, function($a, $b)  {return $a->price - $b->price;});

    return formatPrice($item->prices[0]->price);
}

function formatPrice($price) {
    return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',',$price);
}
