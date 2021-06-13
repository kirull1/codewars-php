<?php 

function solution(string $s): int {
  if(strlen($s) <= 5) return (int)$s;
  return max((int)substr($s, 0, 5), solution(substr($s, 1)));
}