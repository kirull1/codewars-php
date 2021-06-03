<?php 

function lovefunc($f1, $f2) {
  if($f1 % 2 == 0 && $f2 % 2 != 0) return true;
  if($f1 % 2 != 0 && $f2 % 2 == 0) return true;
  return false;
}