<?php

    $opposites = ['NORTH' => 'SOUTH','SOUTH' => 'NORTH','EAST' => 'WEST','WEST' => 'EAST'];
    function dirReduc($arr) {
        return array_reduce($arr, function($a = [], $e){global $opposites; $a[count($a) - 1] != $opposites[$e] ? $a[] = $e : array_pop($a); return $a;});
    }