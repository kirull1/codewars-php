<?php

    function canClimb($r,$c){
        return is_string($r) || is_string($c) ? false : $r * 3.28 >= $c * 2;
    }

