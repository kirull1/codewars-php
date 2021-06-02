<?php 

function is_uppercase($str) {
  if(empty($str)) return true;
  return ctype_upper(preg_replace('%[^a-zР°-СЏ\d]%i','',$str)) ? true : false;
}