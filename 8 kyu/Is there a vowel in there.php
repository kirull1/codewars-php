<?php 

function isVow(array $a){
  return array_map(function($e){return array_search(chr($e), ['a', 'e', 'i', 'o', 'u']) !== false ? chr($e) : $e;}, $a);
}