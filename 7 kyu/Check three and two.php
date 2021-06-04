<?php 

function checkThreeAndTwo($arr) {
  $arr = array_count_values($arr);
  return ($arr['a'] == 3 && $arr['b'] == 2) || ($arr['a'] == 2 && $arr['b'] == 3) || ($arr['a'] == 3 && $arr['c'] == 2) || ($arr['c'] == 2 && $arr['b'] == 3) || ($arr['c'] == 3 && $arr['a'] == 2) || ($arr['c'] == 3 && $arr['b'] == 2) ? true : false;
}