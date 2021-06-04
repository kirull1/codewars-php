<?php 

function divisibleByThree($str) {
  return array_reduce(str_split($str), function($a,$b){return $a+$b*1;}, 0)%3==0;
}