<?php 

function double(&$n){
  $n *= 2; 
}
function halve(&$n){
  $n /= 2;
}
function enlarge(&$n, $a){
  $n *= $a;
}