<?php 

function countBy($x, $n) {
  for($i=$x;$i<=$n*$x;$i+=$x) $res[] = $i;
    return $res;
}