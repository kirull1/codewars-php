<?php 

function getCount($str) {
  for ($i=0; $i < iconv_strlen($str); $i++) if ($str[$i] == 'a' or $str[$i] == 'e' or $str[$i] == 'i' or $str[$i] == 'o' or $str[$i] == 'u') $vowelsCount++;
  return $vowelsCount;
}


function getCount($str) {
  $vowelsCount = 0;
  
  for ($i=0; $i < iconv_strlen($str); $i++) { 
      if ($str[$i] == 'a' or $str[$i] == 'e' or $str[$i] == 'i' or $str[$i] == 'o' or $str[$i] == 'u') {
          $vowelsCount++;
      }
  }
  
  return $vowelsCount;
}