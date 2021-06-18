<?php

    function tankvol($h, $d, $vt) {
        $a = 2 * acos(($d / 2 - $h) / ($d / 2));
        return floor(($a-sin($a))/8/atan(1)*$vt);
    }