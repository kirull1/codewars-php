<?php

    function solution(array $a, array $b){
        return array_sum(array_map(function($x, $y){return ($x-$y)**2;}, $a, $b)) / count($a);
    }

    echo solution([1, 2, 3], [4, 5, 6]);