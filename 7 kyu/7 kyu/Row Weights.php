<?php 

function rowWeights($arr) {
  $r = [0 , 0];
  foreach($arr as $value) {
    if($pos++ % 2 == 0) $r[0] += $value; else $r[1] += $value;
  }
  return $r;
}