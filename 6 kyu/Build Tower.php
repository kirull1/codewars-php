<?php 

function tower_builder(int $n): array {
  for($i=$n+$n;$i>0;$i--){
    $i--;
    $res[] = str_repeat(' ', ($i-$n+$n-1)/2).str_repeat('*', $n+$n-$i).str_repeat(' ', ($i-$n+$n-1)/2);
  }
  return $res;
}