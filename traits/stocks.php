<?php

trait StockController {

   function out_of_stock($n_items){
        if(!is_int($n_items)) {
            throw new Exception("Accetta solo numeri interi");
        }
        if($n_items = 0) {
            echo "Scorte esaurite!";
        }        
    }
}
