<?php 

function hcf($a, $b): int{
  return $b ? hcf($b, $a % $b) : $a;
}
function lcm($a, $b): string{
    return ($a * $b) / hcf($a, $b);
}