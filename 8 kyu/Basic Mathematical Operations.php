<?php 

function basicOp($op, $val1, $val2){
  $s = $val1.$op.$val2;
  return exec("php -r 'echo $s;'")*1;
}