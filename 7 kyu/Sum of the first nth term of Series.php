<?php 

function series_sum($n) {
    if ($n != 0) {
        for ($i=1; $i < $n + 1; $i++) { 
            if ($i != 1) {
                $sum_del = 3 * $i - 2;
                $sum = $sum + 1/$sum_del; 
            }else{
                $sum = 1;
            } 
        }
    }else $sum = 0;
     return number_format($sum, 2, '.', '');