<?php 

function isIsogram($str) {
  $str = mb_strtolower($str);
  if(empty($str)) return true;
  for($i=0;$i<100;$i++) if(substr_count($str, $str[rand(0,strlen($str)-1)]) != 1) return false;
  return true;
}