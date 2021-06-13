<?php 

function solve($arr) {
  foreach($arr as $key => $value){
    for($i=0;$i<strlen($value);$i++) {
      if(strtolower($value[$i]) == range('a', 'z')[$i]) $res[$key]++; elseif(empty($res[$key])) $res[$key] = 0;
    }
  }
  return $res ?: [];
}