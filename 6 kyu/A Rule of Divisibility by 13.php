<?php

    function thirt($n) {
        $arr = [1, 10, 9, 12, 3, 4, 1, 10, 9, 12, 3, 4, 1];
        while($p++ < 3){
            $new_n = strrev($n);
            $s = [];
            for($i=0;$i<strlen($new_n);$i++) $s[] = $arr[$i] * $new_n[$i];
            $n = array_sum($s);
        }
        return $n;
    }