<?php

    function getMinPermute($n_)
    {
    $min=min(str_split(str_replace('0','',$n_)));
    $ch=str_split(implode('', explode($min, $n_, 2)));  
    sort($ch);
    return $min.implode($ch);
    }