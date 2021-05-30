<?php

    function microwaveLeastMoves($time){
        $s = explode(':', $time)[0] * 60 + explode(':', $time)[1];
        return $s <= 60 & $s%30==0 ? $s / 30 + 1 : strlen(ltrim($time, '0'));
    }

