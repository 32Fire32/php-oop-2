<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $weight;
    public $brand;
    public $type;

    public function __construct(string $name, int $cost, Category $categories, string $imgurl, $n_items, string $brand, string $type)
    {
        parent::__construct($name, $cost, $categories, $imgurl ,$n_items);
        $this->brand = $brand;
        $this->type = $type;
    }
}