<?php 

    function wave($p){
        for($j=0;$j<strlen($p);$j++){
            $res = '';
            if ($p[$j] != ' ') {
                for($i=0;$i<strlen($p);$i++){
                    if($j == $i) $res .= strtoupper($p[$i]); else $res .= $p[$i];
                }
              $result[] = $res;
            }
        }
        return $result ?: [];
    }