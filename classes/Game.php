<?php

require_once __DIR__ . '/Product.php';

class Game extends Product {
    public $dimension;
    public $brand;
    public $type;
    public $color;

    public function __construct(string $name, int $cost, Category $categories, string $imgurl, int $n_items, string $brand, string $description)
    {
        parent::__construct($name, $cost, $categories, $imgurl, $n_items);
        $this->brand = $brand;
        $this->description = $description;
    }
}