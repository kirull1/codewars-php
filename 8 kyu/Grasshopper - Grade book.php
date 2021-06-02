<?php 

function getGrade($a, $b, $c) {
  $a = ($a + $b + $c) / 3;
  if($a >= 90) return 'A';
  if($a >= 80) return 'B';
  if($a >= 70) return 'C';
  return $a >= 60 ? 'D' : 'F';
}