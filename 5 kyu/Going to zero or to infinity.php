<?php 

function going($n): float{
  $res = 1; $del = 1;
  for($i=$n;$i>1;$i--){
    $del /= $i;
    $res += $del;
  }
  return substr($res,0,8);
  //return substr((1/factorial($n))*array_reduce(range(1, $n), function($a, $b){return $a += factorial($b);}, 0), 0, 8);
}