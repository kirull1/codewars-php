<?php

    function remainder($a, $b) {
        if($a == 0 && $b == -1) return 0;
        return $a != 0 && $b != 0 ? ($a > $b ? $a%$b : $b%$a) : null;
    }