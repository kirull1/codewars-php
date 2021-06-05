<?php

    function longestConsec($strarr, $k) {
        for ($i = 0; $i < count($strarr) - $k + 1; $i++) {
        $c = implode('', array_slice($strarr, $i, $k));
        $l = strlen($c) > strlen($l) ? $c : $l;
        }
    return $k > 0 ? $l : '';
    }