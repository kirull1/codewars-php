<?php 

function paperwork(int $n, int $m): int{
  return $n < 0 || $m < 0 ? 0 : $n*$m;
}