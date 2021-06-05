<?php 

    function factorial($n) {
        return $n ? $n * factorial($n - 1) : 1;
    }

    function pascals_triangle($n) {
        for ($i=0; $i < $n; $i++) { 
            for ($j=0; $j <= $pos; $j++) { 
                $tr[] = factorial($i)/(factorial($j)*factorial($i-$j));
            }
            $pos++;
        }
        return $tr;
    }