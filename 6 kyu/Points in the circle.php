<?php 

function pointsNumber($r){
  for($i = 0; $i <= $r; $i++) for($j = 1; $j <= $r; $j++) if($i*$i + $j*$j <= $r*$r) $res++;
  return $res*4+1;
}