<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $weight;
    public $brand;
    public $type;

    public function __construct(string $name, int $cost, array $categories, string $imgurl, string $brand, string $type)
    {
        parent::__construct($name, $cost, $categories, $imgurl);
        $this->brand = $brand;
        $this->type = $type;
    }
}