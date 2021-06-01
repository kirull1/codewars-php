<?php 

function people_with_age_drink(int $old): string {
  if($old < 14) return 'drink toddy'; elseif($old < 18) return 'drink coke';
  return $old < 21 ? 'drink beer' : 'drink whisky';
}