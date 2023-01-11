<?php

trait StockController {

   function out_of_stock($number){
        if(!is_int($number)) {
            throw new Exception("Accetta solo numeri interi");
        }
        if($number === 0) {
            throw new Exception("Scorte esaurite");
        }
        return $number;        
    }
}
