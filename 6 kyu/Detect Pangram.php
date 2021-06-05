<?php 

function detect_pangram($string) { 
  $lets = implode(range('a', 'z'));
  for($i=0;$i<strlen($lets);$i++){
    if(strripos($string, $lets[$i]) === false) return false;
  }
  return true;
}