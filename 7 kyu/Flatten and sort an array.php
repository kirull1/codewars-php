<?php 

function flatten_and_sort($array): array{
  for($i = 0; $i < count($array); $i++){
    for($a = 0; $a < count($array[$i]); $a++){
        $res[] = $array[$i][$a];
    }
  }
  if(!empty($res)) sort($res);
  if(count($res) == 0) return [];
  return $res;
}