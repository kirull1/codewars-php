<?php 

function containAllRots($s, $arr){
  for ($i=0;$i<strlen($s);$i++) if (array_search(substr($s,$i).substr($s, 0, $i), $arr) === false) return false;
  return true;
}