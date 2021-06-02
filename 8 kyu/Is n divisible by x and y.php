<?php 

function is_divisible($n, $x, $y) {
  return $n % $x == 0 && $n % $y == 0 ? true : false;
}