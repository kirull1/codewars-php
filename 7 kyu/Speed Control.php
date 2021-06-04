<?php 

function gps($s, $x) {
  for($i=0;$i<count($x)-1;$i++) $res[] = ($x[$i+1] - $x[$i]) * 3600 / $s; 
  return floor(max($res));
}