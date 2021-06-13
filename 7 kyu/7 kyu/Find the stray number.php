<?php 

function stray($arr){
  $arr = array_count_values($arr); asort($arr);
  return key($arr);
}