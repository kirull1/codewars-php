<?php 

function stairsIn20($arr) {
  return array_sum(array_map('array_sum', $arr))*20;
}