<?php 

function tidyNumber($n) {
  $n = strval($n);
  for($i=0;$i<strlen($n);$i++) if($n[$i-1] > $n[$i]) return false;
  return true;
}