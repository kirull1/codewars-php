<?php 

function fuel_price($litres, $pricePerLiter) {
    switch($litres){
        case ($litres >= 10):
            $pricePerLiter -= 0.25;
            break;
        case ($litres >= 8):
            $pricePerLiter -= 0.20;
            break;
        case ($litres >= 6):
            $pricePerLiter -= 0.15;
            break;
        case ($litres >= 4):
            $pricePerLiter -= 0.10;
            break;
        case ($litres >= 2):
            $pricePerLiter -= 0.05;
            break;
    }

    return $pricePerLiter*$litres;
}