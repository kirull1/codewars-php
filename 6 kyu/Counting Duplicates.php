<?php 

function duplicateCount($text) {
  $text = mb_strtolower($text);
  $s = array_sum(array_diff(array_count_values(str_split($text)), array(1)));
  return $s ? $s/($s/count(array_diff(array_count_values(str_split($text)), array(1)))) : 0;
}