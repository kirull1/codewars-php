<?php 

function difference_of_squares(int $n): int {
  return array_sum(range(1, $n))**2 - array_sum(array_map(function($e){return $e**2;},range(1, $n)));
}