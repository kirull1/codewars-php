<?php 

function solution($str, $res = []) {
  for($i=0;$i<strlen($str);$i++) $res[] = $str[$i];
  krsort($res);
  return implode($res) ?: null;
}