<?php 

function toCamelCase($str){
  $str = strripos($str, '-') ? explode('-', $str) : explode('_', $str);
  foreach($str as $value) if($pos++>=1) $res[] = ucfirst($value); else $res[] = $value;
  return join($res);
}