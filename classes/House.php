<?php

require_once __DIR__ . '/Product.php';

class House extends Product {
    public $size;
    public $brand;
    public $material;
    public $color;

    public function __construct(string $name, int $cost, array $categories, string $imgurl, string $brand, string $size)
    {
        parent::__construct($name, $cost, $categories, $imgurl);
        $this->brand = $brand;
        $this->size = $size;
    }
}