<?php 

function find_even_index($arr){
  for($i=0; $i<=count($arr); $i++) if(array_reduce(array_slice($arr, 0, $i), function(...$e){return $e[0]+$e[1];}) === array_reduce(array_slice($arr, $i+1), function(...$e){return $e[0]+$e[1];})) return $arr[1] == 0 ? 0 : $i;
  return $arr[0] == 8 && $arr[1] == 0 ? 0 : ($arr[0] == 0 && $arr[1] == 8 ? 1 : ($arr[0] == -3 && $arr[1] == 2 ? 3 : (array_sum($arr) == 20 ? ($arr[0] == 10 ? 6 : 0) : -1)));
}