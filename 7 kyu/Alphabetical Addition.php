<?php 

function addLetters($let1 = '', $let2 = '', $let3 = '', $let4 = '', $let5 = '', $let6 = '', $let7 = '', $let8 = '', $let9 = '', $let10 = '', $let11 = '', $let12 = '', $let13 = '', $let14 = '') {
  if(empty($let1)) return 'z';
  if($let1 == 'z' and empty($let2)) return 'z';
  if($let1 == 'z') $let1 = '';
  $lets = strtolower('/ABCDEFGHIJKLMNOPQRSTUVWXYZ');
  $letrs = $let1.$let2.$let3.$let4.$let5.$let6.$let7.$let8.$let9.$let10.$let11.$let12.$let13.$let14;
  print($letrs."\n");
  for($i=0; $i < strlen($letrs); $i++) $res[] = strripos($lets, $letrs[$i]);
  $sum = array_sum($res);
  while($sum >= 26){
    if($sum > 26){
      $sum -= 26;
    }
  }
  return $lets[$sum];
}


Beta
d To Capital
