<?php 

function divisors($n) {
  for($i=1;$i<=$n;$i++) $n%$i!=0 ?: $pos++;
  return $pos;
}