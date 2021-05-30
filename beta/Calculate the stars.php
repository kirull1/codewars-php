<?php

    function ratings($r){
        for($i=5;$i>=0;$i--) $res += array_reverse($r)[$i] * ($i + 1); 
        return array_sum($r) <= 0 ? 0 : round($res / array_sum($r), 1);
    }

