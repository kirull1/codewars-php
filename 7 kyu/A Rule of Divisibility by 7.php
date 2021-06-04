<?php 

function seven($m){
  while($m > 91) {
    $m = intval($m / 10) - (2 * ($m % 10)); 
    $count++;
  }
	return [$m, $count];
}