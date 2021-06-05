<?php 

function find_uniq($a) {
  ini_set('memory_limit', '136M');
  return array_search(1, array_count_values(array_map(function($e){return is_float($e) ? strval($e) : $e;},$a)));
}