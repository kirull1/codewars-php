<?php 

function uniqueInOrder($it, $ret = []){
  $it = is_array($it) ? implode($it) : $it;
  for($i=0;$i<strlen($it);$i++){
    if($ret[count($ret)-1] != $it[$i]) $ret[] = $it[$i];
  }
  return $ret;
}