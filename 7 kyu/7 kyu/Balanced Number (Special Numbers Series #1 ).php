<?php 

function balancedNum($num) {
  $num = str_split($num);
  for($i=0;$i<(count($num)-(count($num)%2==0?2:1))/2;$i++){
    $res += $num[$i];
    $res_rev += array_reverse($num)[$i];
  }
  return $res == $res_rev ? "Balanced" : "Not Balanced";
}


function balancedNum($num) {
  $num = str_split($num);
  $num_rev = array_reverse($num);
  if(count($num)%2==0) $n = 2; else $n = 1;
  for($i=0;$i<(count($num)-$n)/2;$i++){
    $res += $num[$i];
    $res_rev += $num_rev[$i];
  }
  return $res == $res_rev ? "Balanced" : "Not Balanced";
}