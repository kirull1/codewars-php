<?php 

function finalGrade($e, $p) {
  if($e > 90 or $p > 10) return 100;
  if($e > 75 and $p >= 5) return 90;
  return $e > 50 and $p >= 2 ? 75 : 0;
}