<?php 

function high($x) {
  $res = array_combine(explode(' ',$x),array_map(function($e){return array_sum(array_map(function($x){return ord($x)-96;},str_split($e)));},explode(' ',$x)));
  return array_search(max($res), $res);
}