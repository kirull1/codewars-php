<?php

    // Working variant
    function pisanoPeriod($m){
        $c = 1;
    
        for($i=0;$i<$m*$m;$i++){
            $t = $c;
            $c = ($p + $c) % $m;
            $p = $t;
    
            if ($p == 0 && $c == 1) 
                return $i + 1;
        }
    }

    // Pisano Period
    function fib($i, $n){
        if ($i == 0) return 0;
        if ($i <= 2) return 1;
    
        $c = $t = $p = 1;
    
        do{
            $t = $c;
            $c = ($c+$p)%$n;
            $p = $t;
        }while(--$i > 2);
    
        return $c;
    }

    // Doesn't work on large numbers.
    function Pisano2($n) {
        while(true){
          $res .= fib(++$i, $n);
          $len = strlen($res);
          if($len > 3){
            for($j=$len;$j>=ceil($len/2);$j--){
              if(substr_count($res, substr($res, 0, $j)) == 2) return $j;
            }
          }
        }
    }