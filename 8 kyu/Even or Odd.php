<?php 

    function even_or_odd(int $n): string {
        if (is_int($n/2) == true) {
            $res = "Even";
        }else $res = "Odd";

        return $res;
    }