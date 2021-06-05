<?php 

function alphabet_position(string $s): string {
        for ($i=0; $i < iconv_strlen($s); $i++) { 
            if ($s[$i] == 'a' or $s[$i] == 'A') {
                $res .= ' 1';
            }elseif ($s[$i] == 'b' or $s[$i] == 'B') {
                $res .= ' 2';
            }elseif ($s[$i] == 'c' or $s[$i] == 'C') {
                $res .= ' 3';
            }elseif ($s[$i] == 'd' or $s[$i] == 'D') {
                $res .= ' 4';
            }elseif ($s[$i] == 'e' or $s[$i] == 'E') {
                $res .= ' 5';
            }elseif ($s[$i] == 'f' or $s[$i] == 'F') {
                $res .= ' 6';
            }elseif ($s[$i] == 'g' or $s[$i] == 'G') {
                $res .= ' 7';
            }elseif ($s[$i] == 'h' or $s[$i] == 'H') {
                $res .= ' 8';
            }elseif ($s[$i] == 'i' or $s[$i] == 'I') {
                $res .= ' 9';
            }elseif ($s[$i] == 'j' or $s[$i] == 'J') {
                $res .= ' 10';
            }elseif ($s[$i] == 'k' or $s[$i] == 'K') {
                $res .= ' 11';
            }elseif ($s[$i] == 'l' or $s[$i] == 'L') {
                $res .= ' 12';
            }elseif ($s[$i] == 'm' or $s[$i] == 'M') {
                $res .= ' 13';
            }elseif ($s[$i] == 'n' or $s[$i] == 'N') {
                $res .= ' 14';
            }elseif ($s[$i] == 'o' or $s[$i] == 'O') {
                $res .= ' 15';
            }elseif ($s[$i] == 'p' or $s[$i] == 'P') {
                $res .= ' 16';
            }elseif ($s[$i] == 'q' or $s[$i] == 'Q') {
                $res .= ' 17';
            }elseif ($s[$i] == 'r' or $s[$i] == 'R') {
                $res .= ' 18';
            }elseif ($s[$i] == 's' or $s[$i] == 'S') {
                $res .= ' 19';
            }elseif ($s[$i] == 't' or $s[$i] == 'T') {
                $res .= ' 20';
            }elseif ($s[$i] == 'u' or $s[$i] == 'U') {
                $res .= ' 21';
            }elseif ($s[$i] == 'v' or $s[$i] == 'V') {
                $res .= ' 22';
            }elseif ($s[$i] == 'w' or $s[$i] == 'W') {
                $res .= ' 23';
            }elseif ($s[$i] == 'x' or $s[$i] == 'X') {
                $res .= ' 24';
            }elseif ($s[$i] == 'y' or $s[$i] == 'Y') {
                $res .= ' 25';
            }elseif ($s[$i] == 'z' or $s[$i] == 'Z') {
                $res .= ' 26';
            }
        }
        return substr($res, 1);
}