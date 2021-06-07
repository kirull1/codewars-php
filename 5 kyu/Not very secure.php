<?php 

function alphanumeric(string $s): bool {
  if(empty($s)) return false;
  return preg_match_all('/[\W]{1}/', $s) ? false : true;
}