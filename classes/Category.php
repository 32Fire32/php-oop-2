<?php

class Category {
    public $animal_name;
    public $graphic;

    public function __construct($animal_name)
    {
        $this->animal_name = $animal_name;
    }

    public function getGraphic($animal_name){
        if ( $animal_name === 'gatto') {
             return $this->graphic = '<i class="fa-solid fa-cat"></i>';
        } else if ($animal_name === 'cane') {
            return $this->graphic = '<i class="fa-solid fa-dog"></i>';
        }
    }
}