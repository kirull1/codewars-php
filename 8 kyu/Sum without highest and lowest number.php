<?php 

function sumArray($array) {
  return array_sum($array) - max($array) - min($array);
}