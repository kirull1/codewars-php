<?php 

function sum_of_minimums($numbers){
  return array_sum(array_map(function($x){return min($x);}, $numbers));
}