<?php 

function datingRange($age) {
  return $age <= 14 ? floor($age - 0.1 * $age) .'-'. floor($age + 0.1 *$age) : floor($age/2+7) .'-'. ($age-7)*2;
}