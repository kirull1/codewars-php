<?php

    function is_solved($b){
        for($i=1;$i<=2;$i++){
            if($b[0][0] == $i && $b[0][1] == $i && $b[0][2] == $i) return $i;
            if($b[1][0] == $i && $b[1][1] == $i && $b[1][2] == $i) return $i;
            if($b[2][0] == $i && $b[2][1] == $i && $b[2][2] == $i) return $i;
        
            if($b[0][0] == $i && $b[1][0] == $i && $b[2][0] == $i) return $i;
            if($b[0][1] == $i && $b[1][1] == $i && $b[2][1] == $i) return $i;
            if($b[0][2] == $i && $b[1][2] == $i && $b[2][2] == $i) return $i;
        
            if($b[0][0] == $i && $b[1][1] == $i && $b[2][2] == $i) return $i;
            if($b[0][2] == $i && $b[1][1] == $i && $b[2][0] == $i) return $i;
        }
        
        for($i=0;$i<count($b);$i++)
        for($j=0;$j<count($b);$j++)
            if($b[$i][$j] == 0) return -1;
        
        return 0;
    }