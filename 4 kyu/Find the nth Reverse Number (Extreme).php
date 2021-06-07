<?php 

    function find_reverse_number($n){
        $p = str_split($n);
        $t = strlen($n);
        if($t==1){
            $p[0] -= 1;
        }elseif($p[0]=='1' && $p[1]=='0'){
            $p[0] = ' ';
            $p[1] = '9';
            for ($j=$t, $i=$t-2; $i>=1; $i--, $j++) $p[$j] = $p[$i];
        }elseif($p[0]=='1'){
            $p[0] = ' ';
            for ($j=$t, $i=$t-1; $i>=1; $i--, $j++) $p[$j] = $p[$i];
        }else{
            $p[0] -= 1;
            for ($j=$t, $i=$t-2; $i>=0; $i--, $j++) $p[$j] = $p[$i];
        }
        return trim(join($p));
    }