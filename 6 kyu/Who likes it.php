<?php 

function likes( $names ) {
  if(count($names) == 0) return 'no one likes this';
  if(count($names) == 1) return $names[0].' likes this';
  if(count($names) == 2) return $names[0].' and '.$names[1].' like this';
  if(count($names) == 3) return $names[0].', '.$names[1].' and '.$names[2].' like this';
  return $names[0].', '.$names[1].' and '.(count($names)-2).' others like this';
}