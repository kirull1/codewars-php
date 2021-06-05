<?php 

function kebabize($string) {
  return trim(join(array_map(function($e){return ord($e) < 95 ? '-'.strtolower($e) : $e;},str_split(preg_replace('/\d/', '', $string)))), '-');
}