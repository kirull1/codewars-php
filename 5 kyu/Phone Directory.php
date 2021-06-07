<?php 

function phone($strng, $num) {
  foreach(explode("\n", $strng) as $value) if(strripos($value, $num)) $val[] = $value;
  if(count($val) == 1){
    $name = preg_replace('/(.*)<(.*)>(.*)/sm', '\2', $val[0]);
    return "Phone => $num, Name => $name, Address => ".trim(str_replace(['  ', '_'], ' ', join(' ', array_map(function($e){return trim($e, '+;/$?,<>:');},explode(' ',trim(str_replace([$name, $num], '', $val[0]), '<>+* '))))));
  }elseif(count($val) > 1) return "Error => Too many people: $num";
  return "Error => Not found: $num";
}