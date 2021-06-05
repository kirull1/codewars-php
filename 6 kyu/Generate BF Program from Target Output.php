<?php 

    function generate_bf_program(string $target): string{
        $pos = 0;
        for ($i=0; $i < strlen($target); $i++) $num[] = ord($target[$i]);
        for ($i=0; $i < count($num); $i++) { 
            $plus = '';
            if ($num[$i] > $pos) {
                for ($j=$pos; $j < $num[$i]; $j++) { 
                    $plus .= '+';
                }
                $pos = $num[$i];
                $res .= $plus.'.';
            }elseif ($num[$i] < $pos) {
                for ($j=$num[$i]; $j < $pos; $j++) { 
                    $plus .= '-';
                }
                $pos = $num[$i];
                $res .= $plus.'.';
            }elseif ($num[$i] == $pos) {
                $res .= '.';
            }
        }
        return $res ?: '';
    }