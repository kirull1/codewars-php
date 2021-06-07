<?php

    function isPrime($n){
        if($n==2) return true;
        if($n%2==0) return false;
        $i=3; $f = sqrt($n);
        while($i<=$f) if($n%$i == 0) return false; else $i+=2;
        return true;
    }
    
    function find_emirp($n) {
        for ($i=11;$i<=$n;$i++) if(isPrime($i) && isPrime(strrev($i)) && strrev($i) != $i) $num[] = $i;
        return $num ? [count($num), max($num), array_sum($num)] : [0, 0, 0];
    }