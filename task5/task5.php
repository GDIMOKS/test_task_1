<?php
//class Item {
//    public $site;
//
//    public function __construct($site)
//    {
//        $this->site = $site;
//    }
//}

global $items;
//$items = array(
//    new Item("site1.ru32131"),
//    new Item("site2.ru"),
//    new Item("site3.ru")
//);

var_export(test($items));

function test($items) {
    $sites = [];
    $result = [];

    foreach($items as $key => $item) {
        preg_match('/(site1\.ru)/', $item->site, $matches);

        if ($matches) {
            $sites[] = 'site1.ru';
        } else {
            $sites[] = 'site2.ru';
        }

        $result[] = $key;
    }

    testTwo($result);

    return $sites;
}

function testTwo($arr) {
    $newArr = [];

    foreach($arr as $itemRes) {
        if($itemRes > 0) $newArr[] = $itemRes;
    }
}

