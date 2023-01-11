<?php

require_once __DIR__ . '/Product.php';

class House extends Product {
    public $size;
    public $brand;
    public $material;
    public $color;

    public function __construct(string $name, int $cost, Category $categories, string $imgurl, int $n_items, string $brand, string $size)
    {
        parent::__construct($name, $cost, $categories, $imgurl, $n_items);
        $this->brand = $brand;
        $this->size = $size;
    }
}