<?php 

function square_sum($numbers, $res = [0]) : int {
  foreach($numbers as $value) $res[] = $value ** 2; 
  return array_sum(array_diff($res, [0]));
}