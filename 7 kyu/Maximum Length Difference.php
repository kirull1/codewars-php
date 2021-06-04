<?php 

function mxdiflg($a1, $a2) {
  $a1 = array_map('strlen', $a1);
  $a2 = array_map('strlen', $a2);
  return $a1 && $a2 ? max(abs(min($a2) - max($a1)), abs(max($a2)-min($a1))) : -1;
}