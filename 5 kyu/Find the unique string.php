<?php

    function find_uniq($a) {
        foreach(array_map(function($e){return array_count_values(array_unique(str_split(strtolower($e))));},$a) as $val)
        foreach($val as $key => $value) if($arr[$key]) $arr[$key] += $value; else $arr[$key] = $value; 
    
        foreach($a as $key => $val)
        for($i=0;$i<strlen($val);$i++) if($arr[$val[$i]] == 1) return $a[$key];
    }