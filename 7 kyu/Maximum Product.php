<?php 

function adjacentElementsProduct($array) {
  for($i=1;$i<count($array);$i++) $val[] = $array[$i] * $array[$i-1];
  return max($val);
}