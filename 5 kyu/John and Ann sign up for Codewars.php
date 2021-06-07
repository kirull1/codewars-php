<?php

    function ss($n){
        $john[] = 0;
        $ann[] = 1;
        for($i=1;$i<$n;$i++){
        $john[] = $i-$ann[$john[$i-1]];
        $ann[] = $i-$john[$ann[$i-1]];
        }

        // Works but slowly.
        //return array_reduce(range(1, $n - 1), function($a, $e){ $a[0][] = $e-$a[1][$a[0][$e-1]]; $a[1][] = $e-$a[0][$a[1][$e-1]]; return $a;}, [[0], [1]]);
        return [$john, $ann];
    }

    function john($n) {
    return ss($n)[0];
    }
    function ann($n) {
    return ss($n)[1];
    }
    function sumJohn($n) {
    return array_sum(ss($n)[0]);
    }
    function sumAnn($n) {
    return array_sum(ss($n)[1]);
    }