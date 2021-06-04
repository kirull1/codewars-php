<?php 

function alphabetWar($fight){
  $leftarr = [1 => 's', 2 => 'b', 3 => 'p', 4 => 'w'];
  $rightarr = [1 => 'z', 2 => 'd', 3 => 'q', 4 => 'm'];
  foreach($leftarr as $key => $value) substr_count($fight, $value) == 0 ?: $resl += substr_count($fight, $value) * $key;
  foreach($rightarr as $key => $value) substr_count($fight, $value) == 0 ?: $resr += substr_count($fight, $value) * $key;
  if($resl == $resr) return "Let's fight again!";
  return $resl > $resr ? 'Left side wins!' : 'Right side wins!';
}