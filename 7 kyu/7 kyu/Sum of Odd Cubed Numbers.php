<?php 

function cube_odd($a) {
  
        $sum = 0;
        foreach ($a as $number) {
            if (!is_numeric($number)) {
                return null;
            }
            if ($number & 1) {
                $sum += ($number ** 3);
            }
        }

        return $sum;
  
}