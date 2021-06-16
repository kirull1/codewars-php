<?php

    function skip($num, $len){
        while($num >= $len) $num -= $len;
        return $num;
    }

    function flap_display($lines, $rotors) {
        $lets = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ ?!@#&()|<>.:=-+*/0123456789';
        foreach($rotors as $val) $value[] = [];

        foreach ($rotors as $key => $rotor) 
            foreach($rotor as $val)
                $value[$key][] = $val + end($value[$key]);

        foreach ($lines as $key => $line) {
            for ($i=0; $i < strlen($line); $i++) { 
                $pos = stripos($lets, $line[$i]) + $value[$key][$i];
                $lines[$key][$i] = $lets[skip($pos, strlen($lets))];
            }
        }
        return $lines;
    }

    print_r(flap_display(["CODE"], [[20, 20, 28, 0]]));