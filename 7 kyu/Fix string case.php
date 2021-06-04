<?php 

function solve($s) {
  for($i=0; $i<strlen($s);$i++) foreach(range('A', 'Z') as $val) if($s[$i] == $val) $pos++;
  return $pos > strlen($s)/2 ? strtoupper($s) : strtolower($s);
}