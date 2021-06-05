<?php 

function reverse($str) {
  $str = explode(' ',$str);
  for($i=0;$i<count($str);$i++){
    $i%2!=0 ? $res[] = strrev($str[$i]) : $res[] = $str[$i];
  }
  return trim(join($res, ' '));
}