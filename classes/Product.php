<?php

class Product {
    use StockController;
    private $name;
    private $cost;
    public $dimensions;
    public $n_items;
    public $categories;
    public $imgurl;
    public $description;

    public function __construct(string $name, int $cost, Category $categories, string $imgurl, $n_items)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->categories = $categories;
        $this->imgurl = $imgurl;
        $this->n_items = $n_items;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setCost($cost){
        $this->cost = $cost;
    }
    public function getCost(){
        return $this->cost;
    }
}