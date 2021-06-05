<?php 

function solution($num){
  for($i=1;$i<$num;$i++){
    if($i % 3 == 0){
      $res += $i;
    }elseif($i % 5 == 0) $res += $i;
  }
  return $res;
}