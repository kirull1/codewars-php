<?php 

function gooseFilter($birds) {
  foreach(array_diff($birds, ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"]) as $val) $res[] = $val;
  return $res ?: [];  
}