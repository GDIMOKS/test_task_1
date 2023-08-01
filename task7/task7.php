<?php
global $items, $minPrice, $maxPrice;

/*class ObjectItemOne{
    public $title;
    public $price;
    public $size;

    public function __construct($title, $price, $size)
    {
        $this->title = $title;
        $this->price = $price;
        $this->size = $size;
    }
}

class Price {
    public $price;
    public $size;

    public function __construct($price, $size)
    {
        $this->price = $price;
        $this->size = $size;
    }
}

class ObjectItemTwo {
    public $title;
    public $prices = array();

    public function __construct($title, $prices)
    {
        $this->title = $title;
        $this->prices = $prices;
    }
}


$minPrice = 200;
$maxPrice = 700;

$items = [
    new ObjectItemOne('picture', 300, 'roubles'),
    new ObjectItemOne('milk', 240, 'roubles'),
    new ObjectItemTwo('book', [new Price(500, 'roubles'), new Price(400, 'roubles'), new Price(300, 'roubles')]),
    new ObjectItemOne('picture', 900, 'roubles'),
    new ObjectItemOne('picture', 100, 'roubles'),
    new ObjectItemOne('picture', 250, 'roubles'),
    new ObjectItemOne('car', 300, 'roubles'),
    new ObjectItemOne('toy', 300, 'roubles'),
    new ObjectItemTwo('book', [new Price(500, 'roubles'), new Price(200, 'roubles'), new Price(600, 'roubles')]),


];

*/?><!--
    <pre>
        <?/*=print_r(var_export(filterPrices($minPrice, $maxPrice, $items)));*/?>
    </pre>
--><?php

function filterPrices($minPrice, $maxPrice, $items) {
    $result = [];
    foreach ($items as $item)
    {
        if (isset($item->prices)) {
            if ($item->prices[0]->price > $minPrice && end($item->prices)->price < $maxPrice) {
                $result[$item->prices[0]->price][] = $item;
            }
        } else if (isset($item->price)) {
            if ($item->price > $minPrice && $item->price < $maxPrice) {

                $result[$item->price][] = $item;
            }
        }
    }
    ksort($result);

    return $result;
}
