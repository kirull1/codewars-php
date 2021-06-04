<?php 

function findShort($str){
  return strlen(min(explode(' ', str_replace(range('a', 'z'), '1', $str))));
}