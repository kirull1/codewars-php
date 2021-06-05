<?php 

function solve($s) {
  $lets = 'abcdefghijklmnopqrstuvwxyz'; $wrong = 'aeiou';
  for($i=0;$i<strlen($s);$i++){
    if(strripos($wrong, $s[$i])){
      $result += strripos($lets, $s[$i])+1;
    }else{
      $res = $result <= $res ?: $result;
      $result = 0;
    }
  }
  return $result <= $res ? $res : $result;
}