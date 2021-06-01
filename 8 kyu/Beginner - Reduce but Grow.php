<?php 

function grow($a) {
  return array_reduce($a, function($x, $s){return $x*$s;}, 1);
}