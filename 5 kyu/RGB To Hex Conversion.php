<?php 

function rgb(...$c){
  foreach($c as $key => $val) if($val > 255) $c[$key] = 255; elseif($val < 0) $c[$key] = 0;
  return strtoupper(sprintf("%02x%02x%02x", $c[0], $c[1], $c[2]));
}