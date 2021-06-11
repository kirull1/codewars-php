<?php

    function perimeter($n) {
        return array_sum(array_map(function($e){
        $prev = 0; $next = 1;
        for($i = 0; $i < $e; $i++){
            $next = $prev + $next;
            $prev = $next - $prev;
        }
        return $prev;
        }, range(0, $n+1))) * 4;
    }