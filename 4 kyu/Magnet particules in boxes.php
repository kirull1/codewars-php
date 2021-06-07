<?php 

function doubles($maxk, $maxn) {
  for ($k=1; $k < $maxk+1; $k++) 
    for ($n=1; $n < $maxn+1; $n++) 
      $res += 1/($k*($n+1)**(2*$k));
  return $res;
}