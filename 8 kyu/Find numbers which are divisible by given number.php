<?php 

function divisibleBy($num, $divisor) {
  foreach($num as $value){
    if($value % $divisor == 0) $arr[] = $value;
  }
  return $arr;
}