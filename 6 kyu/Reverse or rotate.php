<?php

    // function revRot($s, $sz) {
    //     ini_set('memory_limit', '1M');
    //     for($i=0;$i<strlen($s);$i+=$sz){
    //         $string = substr($s, $i, $sz);
    //         strlen($string) != $sz ?: $str[] = $string;
    //     }
    //     return $sz ? implode('', array_map(function($e){return array_sum(array_map(function($e){return $e**2;},str_split($e)))%2==0 ? strrev($e) : substr($e, 1, strlen($e)).$e[0];}, array_diff($str, ['']))) : '';
    // }

    function revRot($s, $sz) {
        if (strlen($s) < $sz | !$s | $sz <= 0) return '';
        $string = str_split($s, $sz);
        strlen(current($string)) == strlen(end($string)) ?: array_pop($string);
        return join(array_map(function($e){return array_sum(str_split($e)) % 2 == 0 ? strrev($e) : substr($e . $e[0], 1);}, $string));
    }