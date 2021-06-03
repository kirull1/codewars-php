<?php 

function positive_sum($arr, $res = []) {
  foreach($arr as $value) if($value > 0) $res[] = $value;
  return array_sum($res);
}