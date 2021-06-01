<?php 

function remove(string $s): string {
  return $s[strlen($s)-1] == '!' ? substr($s, 0, -1) : $s;
}