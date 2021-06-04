<?php 

function switcher($arr) {
  return join(array_map(function($e){return (strrev(join(range('a','z'))).'!? ')[$e-1];}, $arr));
}


function switcher($arr) {
  return join(array_map(function($e){return (' '.strrev(join(range('a','z'))).'!? ')[$e];}, $arr));
}


function switcher($arr){
  return join(array_map(function($e){return 26-$e <= -1 ? (26-$e <= -2 ? (26-$e == -3 ? ' ' : '?') : '!') : chr(26-$e+97);}, $arr));
}