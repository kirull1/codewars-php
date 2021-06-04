<?php 

function descendingOrder(int $n): int {
        $res[] = array();
        $ns = strval($n);
        $length = (int) log10($n)+1;
        for ($i=0; $i < $length; $i++) { 
            $res[$i] = $ns[$i];
        }
        rsort($res);
        for ($a=0; $a < count($res); $a++) { 
            $num .= $res[$a];
        }
        return $num;
}