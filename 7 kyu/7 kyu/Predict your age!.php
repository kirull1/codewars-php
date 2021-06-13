<?php 

function predictAge(...$age){
  return floor(sqrt(array_sum(array_map(function ($n){return $n*$n;}, $age)))/2);
}


function dd($n){return $n*$n;}
function predictAge(...$age){
  return floor(sqrt(array_sum(array_map('dd', $age)))/2);
}