<?php 

function filter_lucky(array $a): array {
  return array_values(array_diff(array_map(function($e){return strpos($e, '7') !== false ? $e : null;},$a),[null]));
}


function filter_lucky(array $a): array {
  foreach(array_diff(array_map(function($e){return strpos($e, '7') !== false ? $e : null;},$a),[null]) as $val) $res[] = $val;
  return $res ?: [];
}