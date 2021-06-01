<?php 

function findDifference($a, $b) {
  $res = $a[0]*$a[1]*$a[2] - $b[0]*$b[1]*$b[2];
 return $res < 0 ? $res*-1 : $res;
}