<?php 

function numPrimorial($n){
  while($n != 0){
    $p++;
    if(!preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $p))){
      $res[] = $p;
      $n--;
    }
  }
  return array_product($res);
}