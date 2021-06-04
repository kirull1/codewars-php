<?php 

function product(string $s): int {
  $s = array_count_values(str_split($s));
  return $s['!'] * $s['?'];
}