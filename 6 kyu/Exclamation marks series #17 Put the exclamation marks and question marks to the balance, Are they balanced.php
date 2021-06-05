<?php 

function balance(string $l, string $r): string {
  $l = array_count_values(str_split($l));
  $r = array_count_values(str_split($r));
  $l['!'] *= 2; $r['!'] *= 2; $l['?'] *= 3; $r['?'] *= 3;
  if(array_sum($l) == array_sum($r)) return "Balance";
  return array_sum($l) > array_sum($r) ? "Left" : "Right";
}