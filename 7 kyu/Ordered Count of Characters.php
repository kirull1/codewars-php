<?php 

function orderedCount($text) {
  if(empty($text)) return [];
  foreach(array_count_values(str_split($text)) as $key => $value) $res[] = [$key, $value];
  return $res;
}