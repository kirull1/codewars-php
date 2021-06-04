<?php 

function XO($s) {
  $res = array_count_values(str_split(strtolower($s)));
  return $res['x'] == $res['o'] ? true : false;
}


function XO($s) {
          $x = 0; $o = 0;
        for ($i=0; $i < iconv_strlen($s); $i++) { 
            if ($s[$i] == 'x' or $s[$i] == 'X') {
                $x++;
            }
            if ($s[$i] == 'o' or $s[$i] == 'O') {
                $o++;
            }
        }
        if ($o == $x) {
            $res = true;
        }else $res = false;
        if ($o == 0 AND $x == 0) {
            $res = true;
        }
        return $res;
}