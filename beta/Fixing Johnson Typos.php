<?php

    function isJohnson($n) {
        $n = strtolower($n);
        if($n == 'john' or $n == 'johnn' or $n == 'johnberg') return false;
        if(strripos($n, 'john') !== false or strripos($n, 'johs') !== false or strripos($n, 'joha') !== false or strripos($n, 'josh') !== false) return true; else return false;
    }