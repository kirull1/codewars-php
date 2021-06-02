<?php 

function get_average($a) {
  return floor(array_sum($a)/count($a));
}