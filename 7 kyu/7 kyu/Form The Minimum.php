<?php 

function minValue($arr): int{
  $arr = join(array_diff(array_unique($arr), [0]));
  if(strlen($arr) == 9) return 123456789;
  for($i=0;$i<(strlen($arr) <= 7 ? 20000 : 750000);$i++) $res[] = str_shuffle($arr);
  return min($res) ?: 0;
}