<?php 

function f($n = null) {
        if ($n <= 0 or is_int($n) != true or is_numeric($n) != true) {
            return false;
        }
        for ($i=0; $i <= $n; $i++) { 
            $res = $res + $i;
        }
        return $res;
}