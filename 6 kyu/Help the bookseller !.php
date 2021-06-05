<?php 

    function stockList($b, $a){
        foreach ($b as $value) {
            $value = explode(' ',$value);
            $res[$value[0][0]] += $value[1];
        }
        foreach ($a as $value){
            $result[$value] = !empty($res[$value]) ? "($value : $res[$value])" : "($value : 0)";
            $sum += $res[$value];
        }
        return $sum != 0 ? join($result, ' - ') : '';
    }