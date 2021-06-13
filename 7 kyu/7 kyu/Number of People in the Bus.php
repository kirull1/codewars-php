<?php 

function number($b) {
  foreach($b as $v) $r += $v[0] - $v[1];
  return $r;
}