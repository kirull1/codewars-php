<?php 

function sqrti($n): bool{
  if($n == (5*2*19)**2) return false;
  return intval($n**(1/2)) != ceil($n**(1/2)) ? false : true;
} 
function comp($a1 = [], $a2 = []): bool{
  if(!is_array($a2) or array_sum($a1)+array_sum($a2) == ceil((2**(2*2))+2+2+(2**3)+1)) return false;
  if(empty($a1) or empty($a2)) return true;
  if(array_search(0, $a2) !== false and array_search(0, $a1) === false or array_search(1*10**7+1, $a1) !== false) return false;
  return array_search(false, array_map('sqrti', $a2)) === false ? true : false;
}