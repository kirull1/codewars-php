<?php

    function check_for_number($str) {
        $i = strlen($str);
        while ($i--) if (is_numeric($str[$i])) return true;
        return false;
    }
    
    function compare($s1, $s2) {
        $s1 = check_for_number($s1) ? '' : preg_replace('/[^\\/\-a-z\s]/i', '', $s1);
        $s2 = check_for_number($s2) ? '' : preg_replace('/[^\\/\-a-z\s]/i', '', $s2);
        return array_sum(array_map('ord', str_split(strtoupper($s1)))) == array_sum(array_map('ord', str_split(strtoupper($s2))));
    }