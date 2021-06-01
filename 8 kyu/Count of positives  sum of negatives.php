<?php 

function countPositivesSumNegatives($input, $p = 0, $n = 0) {
    for($i=0;$i<count($input);$i++) if($input[$i] > 0) $p++; else $n += $input[$i];
    return $n + $p != 0 ? [$p, $n] : [];
}