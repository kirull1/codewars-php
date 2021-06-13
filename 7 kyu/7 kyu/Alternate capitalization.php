<?php 

function capitalize($s) {
  for($i=0;$i<strlen($s);$i++){
    $i%2==0 ? $res[0] .= strtoupper($s[$i]) : $res[0] .= $s[$i];
    $i%2!=0 ? $res[1] .= strtoupper($s[$i]) : $res[1] .= $s[$i];
  }
  return $res;
}