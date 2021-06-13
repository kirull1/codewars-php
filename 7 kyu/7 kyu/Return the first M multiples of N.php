<?php 

function multiples(int $m, float $n): array {
  for($i=1;$i<=$m;$i++) $res[] = $n*$i;
  return $res;
}