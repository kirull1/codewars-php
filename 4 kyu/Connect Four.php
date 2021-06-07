<?php 

    function whoIsWinner($game){
      print_r($game);
        foreach ($game as $value) {
            $set = explode('_', $value);
            $set[1] == 'Yellow' ? $set[1] = 0 : $set[1] = 1;
            $res[$set[0]][] = $set[1];
            if ($pos++ >= 5) return explode('_',$game[count($game)-1])[1];
            if(checkwon($res, $set)) return $set[1] == 0 ? 'Yellow' : 'Red';
        }
        return 'Draw';
    }

    function checkwon($res, $set){
        ksort($res);
        $let = range('A', 'G');
        $pos = count($res[$set[0]])-1;
        $str = $set[1].$set[1].$set[1].$set[1];
        if ($res[$set[0]][$pos] === $set[1] && $res[$set[0]][$pos-1] === $set[1] && $res[$set[0]][$pos-2] === $set[1] && $res[$set[0]][$pos-3] === $set[1]) return true;
        foreach ($res as $value) if ($value[$pos] !== null) $check .= $value[$pos]; else $check .= '|';
        if (strripos($check, strval($str)) !== false) return true; 
        $f = array_search($set[0], $let);
        $check = $res[$let[$f-3]][$pos-3].$res[$let[$f-2]][$pos-2].$res[$let[$f-1]][$pos-1].$res[$let[$f]][$pos].$res[$let[$f+1]][$pos+1].$res[$let[$f+2]][$pos+2].$res[$let[$f+3]][$pos+3];
        if (strripos($check, strval($str)) !== false) return true;
        $check = $res[$let[$f-3]][$pos+3].$res[$let[$f-2]][$pos+2].$res[$let[$f-1]][$pos+1].$res[$let[$f]][$pos].$res[$let[$f+1]][$pos-1].$res[$let[$f+2]][$pos-2].$res[$let[$f+3]][$pos-3];
        if (strripos($check, strval($str)) !== false) return true;
    }