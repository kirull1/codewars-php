<?php 

function fake_bin(string $s): string {
  for($i=0;$i<strlen($s);$i++) $s[$i] < 5 ? $res .= 0 : $res .= 1;
  return $res;
}