<?php 

function sum_all(...$a){
  return array_sum($a);
}
function ultimate_product(...$a){
  $sum = 1;
  foreach($a as $value) $sum *= $value;
  return $sum;
}
function scale_sum($a, ...$b){
  return $a*array_sum($b);
}