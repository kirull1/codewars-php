<?php 

    function number_of_carries($a, $b){
        for ($i=strlen($a)-1; $i > -1; $i--) $arra[] = strval($a)[$i];
        for ($i=strlen($b)-1; $i > -1; $i--) $arrb[] = strval($b)[$i];
        $c = count($arra) > count($arrb) ? count($arra) : count($arrb);
        for ($i=0; $i < $c; $i++) $res[] = $arra[$i] + $arrb[$i];
        for ($i=0; $i < count($res); $i++) { 
            if ($res[$i] > 9) {
                $res[$i] -= 10;
                $res[$i+1]++;
                $ret++; 
            }
        }
        return $ret;
    }