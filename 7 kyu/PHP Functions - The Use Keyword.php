<?php 

function multiple_closures($n){
  return function ($b, $c) use ($n){
    return function ($z, $y) use ($n, $b, $c){
        return $n+$b*$c-$z/$y;
    };
  };
}