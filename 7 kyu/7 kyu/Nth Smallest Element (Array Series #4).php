<?php 

function NthSmallest($arr, $pos){
  sort($arr);
  return $arr[$pos-1];
}