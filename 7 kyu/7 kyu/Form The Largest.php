<?php 

function maxNumber($n): int{
  for($i=0;$i<=200000;$i++) $res[] = str_shuffle($n);
  return ltrim(max($res), 0);
}