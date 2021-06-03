<?php 

function points($games){
  foreach($games as $value){
    $arr = explode(':', $value);
    if($arr[0] > $arr[1]) $res += 3; elseif($arr[0] == $arr[1]) $res++;
  }
  return $res;
}