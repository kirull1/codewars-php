<?php 

function printerError($s, $count = 0) {
  $lets = 'abcdefghijklm';
  for($i=0;$i<strlen($s);$i++){
    if(strripos($lets, $s[$i]) === false) $count++;
  }
  return $count.'/'.strlen($s);
}