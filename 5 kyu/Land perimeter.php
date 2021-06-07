<?php 

    function land_perimeter($arr) {
        for ($i=0; $i < count($arr); $i++) { 
            for ($j=0; $j < strlen($arr[$i]); $j++) { 
                if ($arr[$i][$j] == 'X') {
                    $res += 4;
                    $arr[$i][$j+1] != 'X' ?: $res--;
                    $arr[$i][$j-1] != 'X' ?: $res--;
                    $arr[$i+1][$j] != 'X' ?: $res--;
                    $arr[$i-1][$j] != 'X' ?: $res--;
                }
            }
        }
        return 'Total land perimeter: '.$res;
    }