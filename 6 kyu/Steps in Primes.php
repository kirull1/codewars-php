<?php

    function isPrime($n){
        for($i=2;$i<$n;$i++){
            if($n%$i==0) return false;
            elseif($i*$i > $n) return true;
        }
    }

    function step($g, $m, $n) {
        for($i=$m;$i<=$n;$i++){
            $prime_list[] = $number_prime = isPrime($i);
            if($number_prime == true && count($prime_list) > $g && $prime_list[$i - $g - $m] == true) return [$i - $g, $i];
        }
    }