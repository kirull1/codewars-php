<?php 

    function encodeRailFenceCipher($str, $n, $pos = false): string{
        for ($i=0; $i < $n; $i++) for ($j=0; $j < strlen($str); $j++) $arr[$i][$j] = 'null';
        $pl = 0; $c = 0; 
        for ($i=0; $i < strlen($str); $i++){ 
            if ($pl == 0 or $pl == $n-1) $pos = !$pos;
            $arr[$pl][$c++] = $str[$i];
            $pos ? $pl++ : $pl--; 
        } 
        for ($i=0; $i < count($arr); $i++) for ($j=0; $j < strlen($str); $j++) if ($arr[$i][$j]!='null') $res .= $arr[$i][$j];
        return $res ?: '';
    }
    function decodeRailFenceCipher($str, $n, $pos = false): string{
        for ($i=0; $i < $n; $i++) for ($j=0; $j < strlen($str); $j++) $arr[$i][$j] = 'null';
        $pl = 0; $c = 0; 
        for ($i=0; $i < strlen($str); $i++){ 
            if ($pl == 0) $pos = true; 
            if ($pl == $n-1) $pos = false; 
            $arr[$pl][$c++] = '*'; 
            $pos ? $pl++ : $pl--; 
        } 
        $index = 0; 
        for ($i=0; $i<$n; $i++) for ($j=0; $j<strlen($str); $j++) if ($arr[$i][$j] == '*' && $index<strlen($str)) $arr[$i][$j] = $str[$index++];
        $pl = 0; $c = 0; 
        for ($i=0; $i< strlen($str); $i++) { 
            if ($pl == 0) $pos = true; 
            if ($pl == $n-1) $pos = false; 
            if ($arr[$pl][$c] != '*') $res .= $arr[$pl][$c++];
            $pos ? $pl++ : $pl--; 
        } 
        return $res ?: ''; 
    }