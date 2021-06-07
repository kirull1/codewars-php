<?php 

    function escape($carpark){
        foreach ($carpark as $key => $value) if(array_search('2', $value) === false) unset($carpark[$key]); else break;
        foreach ($carpark as $key => $value) $sort[] = $value;
        $carpark = $sort;

        foreach ($carpark as $key => $value) {
            $d = array_search('1', $value);
            if (empty($pos)) $m = array_search('2', $value); else $m = $pos;

            if ($key+1 == count($carpark)) {
                if ($m != (count($value)-1)) $answer[] = 'R'.((count($value)-1)-$m);
            }elseif ($m == $d) {
                if ($answer[count($answer)-1][0] == 'D') $answer[count($answer)-1] = 'D'.($answer[count($answer)-1][1]+1);
            }else{
                if ($d < $m) {
                    $pos = $d;
                    $answer[] = 'L'.($m-$d);
                    $answer[] = 'D1';
                }else{
                    $pos = $d;
                    $answer[] = 'R'.($d-$m);
                    $answer[] = 'D1';
                }
            }
        }
        return $answer ?: array();
    }