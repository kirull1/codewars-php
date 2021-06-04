<?php 

function word_value(array $a): array {
  foreach(array_map(function($e){return array_sum(array_map(function($x){return array_search($x, range('a', 'z'))+1;},str_split(str_replace(' ','',$e))));}, $a) as $key => $value) $result[] = $value * ($key+1);
  return $result;
}