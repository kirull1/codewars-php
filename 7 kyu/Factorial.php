<?php 

function factorial(int $n){
    if ($n < 0 or $n > 12) throw new RangeException;
    return $n ? $n * factorial($n - 1) : 1;
}