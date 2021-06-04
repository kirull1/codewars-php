<?php 

function sequence_sum(int $begin, int $end, int $step): int {
  if ($step > $end - $begin && $begin < $end) return $begin;
  return $begin < $end ? array_sum(range($begin, $end, $step)) : 0;
}