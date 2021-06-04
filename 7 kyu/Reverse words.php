<?php 

function reverseWords($str) {
  foreach(explode(' ', $str) as $value){
    $res = '';
    for($i=strlen($value);$i>0;$i--) $res .= $value[$i-1];
    $result[] = $res;
  }
  return implode($result, ' ');
}