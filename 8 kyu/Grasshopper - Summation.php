<?php 

function summation($n) {
  return array_sum(range(1,$n));
}

function summation($n) {
  for($i=0;$i<$n+1;$i++) $res[] = $i;
  return array_sum($res);
}