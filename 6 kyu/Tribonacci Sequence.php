<?php 

function tribonacci($s, $n) {
 for ($i=0;count($s)<$n;$i++) {
  	$s[] = $s[$i]+$s[$i+1]+$s[$i+2];
  }
  return array_splice($s, 0, $n);
}