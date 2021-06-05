<?php 

function persistence(string $num, $c = 0){
  while(strlen($num) > 1){
    for($i=0;$i<strlen($num);$i++)
      $i == 0 ? $res = $num[0] : $res *= $num[$i];
    $c++;
    $num = (string) $res;
  } 
  return $c;
}